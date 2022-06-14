<?php  
    require_once('utils/session.php');

    // if already authed
    if($_SESSION['client']) {
        header('Location: /dashboard');
        die();
    }

    // The request is using the POST method
    if($method === 'POST') {
        // connect to db
        require_once("utils/db.php");

        if($_POST['pass'] != $_POST['conf_pass']){
            $_SESSION['messages'][] = "Check passwords";
        } else {
            $client = R::findOne("clients","email = ?", [$_POST['email']]);

            if($client){
                $_SESSION['messages'][] = "Email already taken";
            } else {
                $client = R::dispense("clients");
                $client->firstname = $_POST['firstname'];
                $client->lastname = $_POST['lastname'];
                $client->email = $_POST['email'];
                $client->password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
                // not obligatory fields
                $client->preferences = $_POST['preferences'];
                $client->phone = $_POST['phone'];

                // create new client 
                if(R::store($client)) {                    
                    // set session variables
                    $_SESSION['client'] = [
                        'id'        => $client->id,
                        'username'  => $client->firstname." ".$client->lastname,
                        'is_admin'  => (bool)((int)$client->id == 1)
                    ];
                    
                    $_SESSION['messages'][] = 'Welcome, '.$client->firstname." ".$client->lastname;

                    // redirect to dashboard
                    header('Location: /dashboard');
                    die();
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('partials/head.php'); ?>
    <title>Register | <?php echo $site_title; ?></title>
</head>

<body>

    <?php require_once('partials/navbar.php'); ?>

    <div class="hero-wrap" style="background-image: url('/assets/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span> <span>Register</span>
                        </p>
                        <h1 class="mb-4 bread">Register</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form action="/register.php" class="bg-white p-5 contact-form" method="post">
                        <div class="form-group">
                            <input name="firstname" type="text" class="form-control" placeholder="Your first name*" required>
                        </div>
                        <div class="form-group">
                            <input name="lastname" type="text" class="form-control" placeholder="Your last name*" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Your email*" required>
                        </div>
                        <div class="form-group">
                            <input name="phone" type="text" maxlength="13" class="form-control" placeholder="Your phone number">
                        </div>
                        <div class="form-group">
                            <input name="pass" type="password" minlength="8" class="form-control" placeholder="Password*" required>
                        </div>
                        <div class="form-group">
                            <input name="conf_pass" type="password" minlength="8" class="form-control" placeholder="Confirm password*" required>
                        </div>
                        <div class="form-gorup">
                            <textarea name="preferences" cols="30" rows="5" class="form-control mb-3" placeholder="Any of your preferences"></textarea>
                        </div>
                        <div class="form-group w-100 text-center">
                            <button class="btn btn-primary w-50 btn-lg" type="submit" name="register">Register</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="/login.php">Already have account? Login!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('partials/footer.php'); ?>

</body>

</html>