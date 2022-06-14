<?php  
	require_once('utils/session.php');

	require_once('utils/db.php');

	// get all rooms
	$rooms = R::findAll('rooms');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('partials/head.php'); ?>
	<title>Rooms | <?php echo $site_title; ?></title>
</head>

<body>

	<?php require_once('partials/navbar.php'); ?>

	<div class="hero-wrap" style="background-image: url('/assets/images/bg_1.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
					<div class="text">
						<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span> <span>About</span>
						</p>
						<h1 class="mb-4 bread">Rooms</h1>
					</div>
				</div>
			</div>
		</div>
	</div>



	<section class="ftco-section bg-light ftco-no-pb">
		<div class="container-fluid px-0">
			<div class="row no-gutters justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Roxandrea Rooms</span>
					<h2 class="mb-4">Hotel Master's Rooms</h2>
				</div>
			</div>
			<div class="row no-gutters">
				<?php 
					if(isset($rooms)) {
						foreach ($rooms as $room) { ?>
							<div class="col-lg-6">
								<div class="room-wrap d-md-flex">
									<a href="/room.php?room_id=<?php echo $room->id ?>" class="img" style="background-image: url(/rooms/<?php echo $room->roomimage ?>);"></a>
									<div class="half left-arrow d-flex align-items-center">
										<div class="text p-4 p-xl-5 text-center">
											<p class="mb-0"><span class="price mr-1"><?php echo $room->roomprice ?> KZT</span> <span class="per">per
													night</span></p>
											<h3 class="mb-3"><a href="/room.php?room_id=<?php echo $room->id ?>"><?php echo $room->roomname ?></a></h3>
											<p class="pt-1"><a href="/room.php?room_id=<?php echo $room->id ?>" class="btn-custom px-3 py-2">View Room
													Details <span class="icon-long-arrow-right"></span></a></p>
										</div>
									</div>
								</div>
							</div>
						<?php }
					}
				?>
			</div>
		</div>
	</section>

	<?php require_once('partials/footer.php'); ?>

</body>

</html>