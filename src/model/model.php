<?php
include '../../config/db_connect.php';

class model {
    //CLIENT SIGNUP

    function client_signup( $name, $property, $email, $contact_number, $hashed_password ) {
        try {
            global $conn;
            $query = "INSERT INTO `client`(`name`, `property_type`, `phone`, `email`, `password`) VALUES  ('$name','$property',$contact_number,'$email','$hashed_password')";
            $execute = mysqli_query( $conn, $query );
            return $execute;
        } catch ( exception $e ) {
            echo $e;
        }
    }
    // check duplicate email

    function check_duplicate_email( $email ) {
        try {
            global $conn;
            $query = "SELECT `email` FROM `client` WHERE `email`= '$email'";
            $execute = mysqli_query( $conn, $query );
            return $execute->num_rows;
        } catch ( exception $e ) {
            echo $e;
        }
    }
}
?>