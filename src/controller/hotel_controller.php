<?php
include("../model/model.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $property_name = htmlentities(trim($_POST['property_name']));
    $booking_year = htmlentities(trim($_POST['booking_year']));
    $contact_number = htmlentities(trim($_POST['hotel_contact']));
    $hotel_email = htmlentities(trim($_POST['hotel_contact']));
    $room_availabile = htmlentities(trim($_POST['room_available']));
    $check_in_time = htmlentities(trim($_POST['check_in_time']));
    $check_out_time = htmlentities(trim($_POST['check_out_time']));
    $cancellation_policy = htmlentities(trim($_POST['cancellation_policy']));
    $client_id = $_SESSION['client_id'];
    var_dump($client_id);
    // PROPERTY NAME 
    if (empty($property_name)) {
        echo "Property name is required.";
    } elseif (!preg_match('/^[a-zA-Z0-9\s]+$/', $property_name)) {
        echo "Invalid property name format.";
    }
    // BOOKING YEAR
    if (!is_numeric($booking_year) || $booking_year < date('Y') || $booking_year > date('Y') + 10) {
        echo "Invalid booking year.";
    }
    // CONTACT NUMBER
    if (empty($contact_number)) {
        echo "Contact number is required.";
    } elseif (!preg_match('/^\+?\d{1,4}?\s?\(?[0-9]{1,4}\)?[-.\s]?[0-9]{1,6}[-.\s]?[0-9]{1,6}$/i', $contact_number)) {
        echo "Invalid contact number format.";
    }
    // EMAIL 
    if (empty($hotel_email)) {
        echo "Hotel email is required.";
    }
    // elseif (!filter_var($hotel_email, FILTER_VALIDATE_EMAIL)) {
    //     echo "Invalid hotel email format.";
    // }
    // ROOMS AVAILABLE 
    if (empty($room_availabile) || !is_numeric($room_availabile) || $room_availabile < 0) {
        echo "Invalid room available value.";
    }
    // CHECK IN TIME CHECK OUT TIME
    if (empty($check_in_time) || empty($check_out_time) || strtotime($check_in_time) === false || strtotime($check_out_time) === false) {
        echo  "Invalid date format for check-in or check-out time.";
    }
    // CANCELLATION POLICY
    if (empty($cancellation_policy)) {
        echo "Cancellation policy is required.";
<<<<<<< HEAD
    }
    // Proceed with database insertion
    $model = new model();
    if (isset($_POST['hotel_id']) && !empty($_POST['hotel_id'])) {
        $updation_result = $model->hotel_info_update($property_name, $booking_year, $contact_number, $hotel_email, $room_availabile, $check_in_time, $check_out_time, $cancellation_policy, $client_id);
        if ($updation_result) {
            echo "updated succesfully";
            header('Location: ../view/hotel_address.php');
        } else {
            echo "try again";
        }
    } else {
        $result = $model->hotel_info($property_name, $booking_year, $contact_number, $hotel_email, $room_availabile, $check_in_time, $check_out_time, $cancellation_policy, $client_id);
        if ($result) {
            echo 'basic info entred';
            header('Location: ../view/hotel_address.php');
=======
    } else {
        // Proceed with database insertion
        $model = new model();
        $result = $model->hotel_info($property_name, $booking_year, $contact_number, $hotel_email, $room_availabile, $check_in_time, $check_out_time, $cancellation_policy, $client_id);
        if ($result) {
            echo 'basic info entred';
            // header('Location: ../view/business_login.php');
>>>>>>> a6e148d (client login and hotel register)
        } else {
            echo 'Try again';
            // header('Location: ../../src/view/client_signup.php');
        }
<<<<<<< HEAD
    }
}
?>
<a href=""></a>
=======
        $model = new model();
        $updation_result = $model->hotel_info_update($property_name, $booking_year, $contact_number, $hotel_email, $room_availabile, $check_in_time, $check_out_time, $cancellation_policy, $client_id);
        if ($updation_result) {
            echo "updated succesfully";
        } else {
            echo "try again";
        }
    }
}
>>>>>>> a6e148d (client login and hotel register)
