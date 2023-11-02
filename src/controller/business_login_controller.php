<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlentities(trim($_POST['name']));
    $password = htmlentities(trim($_POST['password']));
    // Validation name
    if (empty($name)) {
        echo 'Name is required.';
    } elseif (strlen($name) < 2 || strlen($name) > 50) {
        echo 'Name should be between 2 and 50 characters.';
    }
    // Validation password
    if (empty($password)) {
        echo 'Password is required.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        echo 'Password must include at least one uppercase letter, one lowercase letter, one special character, one number, and be at least 8 characters long.';
    } elseif ($password != $confirm_password) {
        echo 'Passwords do not match.';
    } else {
        // Get the email and password from the form
        $email = htmlentities(trim($_POST['email']));
        $password = htmlentities(trim($_POST['password']));
        // Execute the SQL query
        $query = "SELECT `id`,`email` , `password`,`status`,`roles` FROM users where `email`= '$email' ";
        $result = mysqli_query($conn, $query);

        // Password is valid, now hash it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Proceed with database insertion
        $model = new model();
        $existing_email = $model->check_duplicate_email($email);

        if ($existing_email > 0) {
            echo 'This email is already registered.';
        } else {
            $result = $model->client_signup($name, $property, $email, $contact_number, $hashed_password);
            var_dump($result);
            if ($result) {
                echo 'Sign in successful.';
            } else {
                echo 'Sign in failed.';
                header('Location: ../../src/view/client_signup.php');
            }
        }
    }
}
