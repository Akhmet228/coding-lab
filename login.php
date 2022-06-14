<?php  
    require_once('utils/session.php');
    
    if(isset($_SESSION['client'])){ 
        header('Location: /dashboard');
        die();
    }

    // The request is using the POST method
    if ($method === 'POST') {
        // connect to db
        require_once("utils/db.php");

        // set empty array for errors
        $errors = array();

        if(isset($_POST['login'])){      
            $client = R::findOne("clients","email = ?",[$_POST['email']]);

            // if user exists
            if($client){
                // verifing user password
                if(password_verify($_POST['password'], $client->password)){
                    // getting user information
                    $_SESSION['client']['id'] = $client->id;
                    $_SESSION['client']['username'] = $client->firstname." ".$client->lastname;
                    $_SESSION['client']['is_admin'] = (bool)((int)$client->id == 1);
                    
                    $_SESSION['messages'][] = 'Welcome, '.$client->firstname." ".$client->lastname;

                    header('Location: /dashboard');
                    die();

                } else {
                    $errors[] = 'Please check your credentials';
                }
            } else {
                $errors[] = 'Please check your credentials';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('partials/head.php'); ?>
    <title>Login | <?php echo $site_title; ?></title>
</head>

<body>

    <?php require_once('partials/navbar.php'); ?>

    <div class="hero-wrap" style="background-image: url('/assets/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span> <span>Login</span>
                        </p>
                        <h1 class="mb-4 bread">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form action="/login.php" class="bg-white p-5 contact-form" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Your email" required>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" minlength="8" class="form-control" placeholder="Your password" required>
                        </div>
                        <div class="form-group w-100 text-center">
                            <button class="btn btn-primary w-50 btn-lg" type="submit" name="login">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="/register.php">Don't have account? Register!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('partials/footer.php'); ?>

</body>

</html>