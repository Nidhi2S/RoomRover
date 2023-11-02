<?php
session_start();
// echo "hii";
include("../../config/db_connect.php");
include("../model/model.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));

    // Validation email
    if (empty($email)) {
        echo 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
    }
    // Validation password
    if (empty($password)) {
        echo 'Password is required.';
    } else {
        $model = new model();
        $hashed_password =  $model->client_login($email);

        // $hashed_password = $fetched_data('password');
        if (password_verify($password, $hashed_password,)) {
            echo 'login successfully';
        } else {
            echo 'login failed.';
            header('Location: ../../src/view/client_signup.php');
        }
    }
}
