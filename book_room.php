<?php 
    session_start();

    // check if client in the system
    require_once('utils/is_authed.php');

    // connect to database
    require_once('utils/db.php');

    // handle post request
    if($method === "POST") {
        // get room
        $room = R::findOne('rooms', 'id = ?', [$_POST['roomid']]);

        // create new booking
        $booking = R::dispense('roombookings');
        $booking->clientid = $_SESSION['client']['id'];
        $booking->roomid = $_POST['roomid'];
        $booking->persons = $_POST['persons'];
        $booking->notes = $_POST['notes'];
        $booking->arrivaldate = $_POST['arrivaldate'];
        $booking->departuredate = $_POST['departuredate'];

        // count days 
        $date1 = new DateTime($_POST['arrivaldate']);
        $date2 = new DateTime($_POST['departuredate']);
        $days = $date1->diff($date2)->days;

        $booking->total = (float)$room->roomprice * (int)$_POST['persons'] * (int)$days;

        // save booking
        if(!R::store($booking)){
            $_SESSION['messages'][] = 'Please try later!';
        } else {
            $_SESSION['messages'][] = 'Booked successfully';
        }

        header('Location: /dashboard');
        die();
    }
?>