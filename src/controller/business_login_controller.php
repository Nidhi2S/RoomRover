<?php
session_start();
// echo "hii";
include("../../config/db_connect.php");
include("../model/model.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));
<<<<<<< HEAD
    // $remember_me = isset($_POST['remember_me']) ? true : false;
=======
    
>>>>>>> a6e148d (client login and hotel register)

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
            if (isset($_POST['remember_me'])) {
                setcookie('remember_me_email', $email, time() + (60 * 60 * 24), '/');
                setcookie('remember_me_password', $password, time() + (60 * 60 * 24), '/');
            } else {
                setcookie('remember_me_email', '', time() - (60 * 60 * 24), '/');
                setcookie('remember_me_password', '', time() - (60 * 60 * 24), '/');
            }
            echo 'login successfully';
<<<<<<< HEAD
            header("location: ../view/hotel.php");
        } else {
            echo 'wrong password';
            header("location: ../view/business_login.php");
        }
    }
}
?>
=======
            header("location: ../view/hotel.php"); 
        } else {
            echo 'password does not matched';
        }
    }
}
?>
>>>>>>> a6e148d (client login and hotel register)
