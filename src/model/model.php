<?php
include '../../config/db_connect.php';

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
            $query = "SELECT `email`, `password` FROM `client` WHERE `email` = '$email';";
            $execute = mysqli_query($conn, $query);
            $fetched_data = mysqli_fetch_assoc($execute);
            $hashed_password = $fetched_data['password'];
            return $hashed_password ;
        } catch (exception $e) {
            echo $e;
        }
    }
}
