<?php  
	require_once('utils/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('partials/head.php'); ?>
	<title>Home | <?php echo $site_title; ?></title>
</head>

<body>

	<?php require_once('partials/navbar.php'); ?>

	<div class="hero">
		<div class="container-wrap d-flex justify-content-end align-items-end">
			<a href="https://www.youtube.com/watch?v=ism1XqnZJEg"
				class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
				<span class="ion-ios-play play"></span>
			</a>
		</div>
		<section class="home-slider owl-carousel">
			<div class="slider-item" style="background-image:url(/assets/images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
						<div class="col-md-8 ftco-animate">
							<div class="text mb-5 pb-5">
								<h1 class="mb-3">Kazakhstan</h1>
								<h2>More than a hotel... an experience</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image:url(/assets/images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
						<div class="col-md-8 ftco-animate">
							<div class="text mb-5 pb-5">
								<h1 class="mb-3">Experience Epic Beauty</h1>
								<h2>Kazakhstan Hotel &amp; Resort</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 pr-1 aside-stretch">
					<form action="#" class="booking-form">
						<div class="row">
							<div class="col-md d-flex py-md-3">
								<div class="form-group align-self-stretch d-flex align-items-end">
									<div class="wrap bg-white align-self-stretch py-3 px-4">
										<label for="#">Check-in Date</label>
										<input type="text" class="form-control checkin_date"
											placeholder="Check-in date">
									</div>
								</div>
							</div>
							<div class="col-md d-flex py-md-3">
								<div class="form-group align-self-stretch d-flex align-items-end">
									<div class="wrap bg-white align-self-stretch py-3 px-4">
										<label for="#">Check-out Date</label>
										<input type="text" class="form-control checkout_date"
											placeholder="Check-out date">
									</div>
								</div>
							</div>
							<div class="col-md d-flex py-md-3">
								<div class="form-group align-self-stretch d-flex align-items-end">
									<div class="wrap bg-white align-self-stretch py-3 px-4">
										<label for="#">Room</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control">
													<option value="">Suite</option>
													<option value="">Family Room</option>
													<option value="">Deluxe Room</option>
													<option value="">Classic Room</option>
													<option value="">Superior Room</option>
													<option value="">Luxury Room</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md d-flex py-md-3">
								<div class="form-group align-self-stretch d-flex align-items-end">
									<div class="wrap bg-white align-self-stretch py-3 px-4">
										<label for="#">Guests</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control">
													<option value="">1 Adult</option>
													<option value="">2 Adult</option>
													<option value="">3 Adult</option>
													<option value="">4 Adult</option>
													<option value="">5 Adult</option>
													<option value="">6 Adult</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md d-flex">
								<div class="form-group d-flex align-self-stretch">
									<a href="/rooms.php"
										class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check
											Availability <small>Best Price Guaranteed!</small></span></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-wrap">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-3">
					<a href="#" class="services-wrap img align-items-end d-flex"
						style="background-image: url(/assets/images/room-3.jpg);">
						<div class="text text-center pb-2">
							<h3>Special Rooms</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="services-wrap img align-items-end d-flex"
						style="background-image: url(/assets/images/swimming-pool.jpg);">
						<div class="text text-center pb-2">
							<h3>Swimming Pool</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="services-wrap img align-items-end d-flex"
						style="background-image: url(/assets/images/resto.jpg);">
						<div class="text text-center pb-2">
							<h3>Restaurant</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<div class="services-wrap services-overlay img align-items-center d-flex"
						style="background-image: url(/assets/images/sleep.jpg);">
						<div class="text text-center pb-2">
							<h3 class="mb-0">Suites &amp; Rooms</h3>
							<span>Special Rooms</span>
							<div class="d-flex mt-2 justify-content-center">
								<div class="icon">
									<a href="/rooms.php"><span class="ion-ios-arrow-forward"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Welcome to Kazakhstan Hotel</span>
					<h2 class="mb-4">A New Vision of Luxury Hotel</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-reception-bell"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Friendly Service</h3>
						</div>
					</div>
				</div>
				<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services active py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-serving-dish"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Get Breakfast</h3>
						</div>
					</div>
				</div>
				<div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-car"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Transfer Services</h3>
						</div>
					</div>
				</div>
				<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-spa"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Suits &amp; SPA</h3>
						</div>
					</div>
				</div>
				<div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="ion-ios-bed"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Cozy Rooms</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light ftco-room">
		<div class="container-fluid px-0">
			<div class="row no-gutters justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Kazakhstan Rooms</span>
					<h2 class="mb-4">Hotel Master's Rooms</h2>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-6">
					<div class="room-wrap">
						<div class="img d-flex align-items-center" style="background-image: url(/assets/images/bg_3.jpg);">
							<div class="text text-center px-4 py-4">
								<h2>Welcome to <a href="/">Kazakhstan</a> Hotel</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary
									regelialia.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="/rooms.php" class="img" style="background-image: url(/assets/images/room-1.jpg);"></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per
										night</span></p>
								<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
								<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
										Details <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img order-md-last" style="background-image: url(/assets/images/room-2.jpg);"></a>
						<div class="half right-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per
										night</span></p>
								<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
								<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
										Details <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="/rooms.php" class="img order-md-last" style="background-image: url(/assets/images/room-3.jpg);"></a>
						<div class="half right-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per
										night</span></p>
								<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
								<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
										Details <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img" style="background-image: url(/assets/images/room-4.jpg);"></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per
										night</span></p>
								<h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
								<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
										Details <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img" style="background-image: url(/assets/images/room-6.jpg);"></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span><span
										class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per
										night</span></p>
								<h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
								<p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
										Details <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb px-0">
		<div class="container-fluid px-0">
			<div class="row no-gutters justify-content-end">
				<div class="col-md-12">
					<div id="home" class="video-hero"
						style="height: 800px; background-image: url(/assets/images/bg_1.jpg); background-size:cover; background-position: center center;">
						<a class="player"
							data-property="{videoURL:'https://www.youtube.com/watch?v=ism1XqnZJEg',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
						<div class="container">
							<div class="row justify-content-start d-flex align-items-end height-text ">
								<div class="col-md-8">
									<div class="text">
										<h1>We're Most Recommended Hotel</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-menu" style="background-image: url(/assets/images/restaurant-pattern.jpg);">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Restaurant</span>
					<h2>Restaurant</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(/assets/images/menu-1.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Grilled Crab with Onion</span></h3>
								<span class="price price-left">$20.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(/assets/images/menu-2.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
								<span class="price price-left">$29.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(/assets/images/menu-3.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
								<span class="price price-left">$20.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(/assets/images/menu-4.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
								<span class="price price-left">$20.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(/assets/images/menu-5.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Grilled Beef with potatoes</span></h3>
								<span class="price">$49.91</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(/assets/images/menu-6.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Ultimate Overload</span></h3>
								<span class="price">$20.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(/assets/images/menu-7.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Grilled Beef with potatoes</span></h3>
								<span class="price">$20.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(/assets/images/menu-8.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Ham &amp; Pineapple</span></h3>
								<span class="price">$20.00</span>
							</div>
							<div class="d-block">
								<p>A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="instagram">
		<div class="container-fluid">
			<div class="row no-gutters justify-content-center pb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Photos</span>
					<h2><span>Instagram</span></h2>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-sm-12 col-md ftco-animate">
					<a href="/assets/images/insta-1.jpg" class="insta-img image-popup"
						style="background-image: url(/assets/images/insta-1.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="/assets/images/insta-2.jpg" class="insta-img image-popup"
						style="background-image: url(/assets/images/insta-2.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="/assets/images/insta-3.jpg" class="insta-img image-popup"
						style="background-image: url(/assets/images/insta-3.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="/assets/images/insta-4.jpg" class="insta-img image-popup"
						style="background-image: url(/assets/images/insta-4.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="/assets/images/insta-5.jpg" class="insta-img image-popup"
						style="background-image: url(/assets/images/insta-5.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php require_once('partials/footer.php'); ?>

</body>

</html>