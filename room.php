<?php  
  require_once('utils/session.php');
  
  // connect database
  require_once('utils/db.php');

  // find room
  $room = R::findOne('rooms', 'id = ?', [$_GET['room_id']]);

  // if not found
  if(!isset($room)) {
    header('Location: /rooms.php');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('partials/head.php'); ?>
	<title></title>
</head>

<body>

	<?php require_once('partials/navbar.php'); ?>

  <div class="hero-wrap" style="background-image: url('/rooms/<?php echo $room->roomimage ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span> <span><?php echo $room->roomname ?></span></p>
	            <h1 class="mb-4 bread"><?php echo $room->roomname ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url(/rooms/<?php echo $room->roomimage ?>);"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4"><?php echo $room->roomname ?></h2>
                <div class="container">
                  <div class="row no-gutters">
                    <div class="col-md-6">
                      <div class="d-md-flex mt-5 mb-5">
                        <ul class="list">
                          <li><span>Max:</span> <?php echo $room->maxpersons ?> persons</li>
                          <li><span>Size:</span> <?php echo $room->roomsize ?> m2</li>
                        </ul>
                        <ul class="list ml-md-5">
                          <li><span>View:</span> <?php echo $room->roomview ?></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <form action="/book_room.php" method="post">
                        <input type="hidden" name="roomid" value="<?php echo $room->id ?>" required>
                        <div class="form-group">
                          <label for="">Arrival date</label>
                          <input type="date" name="arrivaldate" min="<?php echo date('Y-m-d', strtotime("today")); ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="">Departure date</label>
                          <input type="date" name="departuredate" min="<?php echo date('Y-m-d', strtotime("next day")); ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="">Persons</label>
                          <input type="number" name="persons" min="1" max="<?php echo $room->maxpersons ?>" class="form-control" value="1" required>
                        </div>
                        <div class="form-group">
                          <label for="">Notes</label>
                          <textarea name="notes" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary btn-lg" type="submit">Book room</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
    						<p><?php echo $room->roomdescription ?></p>    						
          		</div>
          		
          	</div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

	<?php require_once('partials/footer.php'); ?>

</body>

</html>