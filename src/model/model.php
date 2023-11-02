<?php
include '../../config/db_connect.php';
session_start();
class model
{
    //CLIENT SIGNUP
    function client_signup($name, $property, $email, $contact_number, $hashed_password)
    {
        try {
            global $conn;
            $query = "INSERT INTO `client`(`name`, `property_type`, `phone`, `email`, `password`) VALUES  ('$name','$property',$contact_number,'$email','$hashed_password')";
            $execute = mysqli_query($conn, $query);
            return $execute;
        } catch (exception $e) {
            echo $e;
        }
    }

    // check duplicate email
    function check_duplicate_email($email)
    {
        try {
            global $conn;
            $query = "SELECT `email` FROM `client` WHERE `email`= '$email'";
            $execute = mysqli_query($conn, $query);
            return $execute->num_rows;
        } catch (exception $e) {
            echo $e;
        }
    }

    // CLIENT LOGIN
    function client_login($email)
    {
        try {
            global $conn;
            $query = "SELECT * FROM `client` WHERE `email` = '$email';";
            $execute = mysqli_query($conn, $query);
            $fetched_data = mysqli_fetch_assoc($execute);
            $hashed_password = $fetched_data['password'];
            echo $_SESSION['client_id'] = $fetched_data['id'];
            return $hashed_password;
        } catch (exception $e) {
            echo $e;
        }
    }
    // // HOTEL BASIC INFO
    function hotel_info($property_name, $booking_year, $contact_number, $hotel_email, $room_availabile, $check_in_time, $check_out_time, $cancellation_policy, $client_id)
    {
        try {
            global $conn;
            $query = "INSERT INTO `hotel`
            ( `property_name`, `booking_year`, `hotel_phone`, `hotel_email`, `rooms_available`, `check_in`, `check_out`, `cancellation_policy`, `client_id`)
            VALUES
            ( '$property_name','$booking_year', '$contact_number', '$hotel_email', '$room_availabile', '$check_in_time', '$check_out_time', '$cancellation_policy','$client_id')";
            $execute = mysqli_query($conn, $query);
            return ($execute);
        } catch (Exception $e) {
            echo $e;
        }
    }

    // HOTEL BASIC INFO UPDATION
    function hotel_info_update($property_name, $booking_year, $contact_number, $hotel_email, $room_availabile, $check_in_time, $check_out_time, $cancellation_policy, $client_id)
    {
        try {
            global $conn;
            $query = "UPDATE `hotel`SET `property_name` = '$property_name',`booking_year` = $booking_year,`hotel_phone` = '$contact_number',`hotel_email` = '$hotel_email',`rooms_available` = '$room_availabile',`check_in` = '$check_in_time',`check_out` = '$check_out_time',`cancellation_policy` = '$cancellation_policy'  where id = $client_id ";
            $execute = mysqli_query($conn, $query);
            return $execute;
        } catch (Exception $e) {
            echo $e;
        }
    }
    //HOTEL ADDRESS INSERTION
    function hotel_address_insertion($locality, $pincode, $country, $state, $city)
    {
        try {
            global $conn;
            $query = "INSERT INTO `hotel_address`(`locality`, `pin_code`, `city`, `state`) 
            VALUES ('$locality', '$pincode', '$country','$city', '$state')";
            $execute = mysqli_query($conn, $query);
        } catch (Exception $e) {
            echo $e;
        }
    }
}
