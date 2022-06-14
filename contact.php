<?php  
  require_once('utils/session.php');
  
  // check if request method is post
  if($method === "POST") {
      // connect to database
      require_once('utils/db.php');

      // creating new contact us from contact us form
      $contact = R::dispense('contactus');
      $contact->username = $_POST['name'];
      $contact->useremail = $_POST['email'];
      $contact->subject = $_POST['subject'];
      $contact->message = $_POST['message'];

      // if everything is ok send message ok else say try later
      if(R::store($contact)) {
        $_SESSION['messages'][] = 'Thank you!';
      } else {
        $_SESSION['message'][] = 'Please try later';
      }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('partials/head.php'); ?>
	<title>Contact | <?php echo $site_title; ?></title>
</head>

<body>

	<?php require_once('partials/navbar.php'); ?>

	<div class="hero-wrap" style="background-image: url('/assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span> <span>Contact</span></p>
	            <h1 class="mb-4 bread">Contact us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> <?php echo $hotel_address ?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920"><?php echo $hotel_phone ?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php echo $hotel_email ?></a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="/contact.php" method="post" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input name="subject" type="text" class="form-control" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

	<?php require_once('partials/footer.php'); ?>

</body>

</html>