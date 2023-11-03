<?php 
include('../model/model.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlentities(trim($_POST['name']));
    $property = htmlentities(trim($_POST['property']));
    $email = htmlentities(trim($_POST['email']));
    $contact_number = htmlentities(trim($_POST['contact']));
    $password = htmlentities(trim($_POST['password']));
    $confirm_password = htmlentities(trim($_POST['confirm_password']));

    // Validation name
    if (empty($name)) {
        echo 'Name is required.';
    } elseif (strlen($name) < 2 || strlen($name) > 50) {
        echo 'Name should be between 2 and 50 characters.';
    }

    // Validation property
    if (empty($property)) {
        echo 'Property is required.';
    } elseif (strlen($property) < 2 || strlen($property) > 50) {
        echo 'Property should be between 2 and 50 characters.';
    }

    // Validation email
    if (empty($email)) {
        echo 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
    }

    // Validation password
    if (empty($password)) {
        echo 'Password is required.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        echo 'Password must include at least one uppercase letter, one lowercase letter, one special character, one number, and be at least 8 characters long.';
    } elseif ($password != $confirm_password) {
        echo 'Passwords do not match.';
    } else {
        // Password is valid, now hash it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Proceed with database insertion
        $model = new model();
        $existing_email = $model->check_duplicate_email($email);

        if ($existing_email > 0) {
            echo 'This email is already registered.';
        } else {
            $result = $model->client_signup($name, $property, $email, $contact_number, $hashed_password);
            // var_dump($result);
            if ($result) {
                echo 'Sign up successful.';
                header('Location: ../view/business_login.php');
            } else {
                echo 'Sign up failed.';
                // header('Location: ../../src/view/client_signup.php');
            }
        }
    }
}
?>
