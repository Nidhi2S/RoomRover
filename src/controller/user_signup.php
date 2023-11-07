<?php
// Retrieving form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$property = $_POST['property'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Flag to track any validation errors
$valid = true;
$errors = array();

// Validation for name
if (empty($name)) {
    $valid = false;
    $errors['name'] = 'Name is required.';
}

// Validation for email
if (empty($email)) {
    $valid = false;
    $errors['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $valid = false;
    $errors['email'] = 'Invalid email format.';
}

// Validation for contact
if (empty($contact)) {
    $valid = false;
    $errors['contact'] = 'Contact is required.';
} elseif (!preg_match('/^\d{10}$/', $contact)) {
    $valid = false;
    $errors['contact'] = 'Invalid contact number format.';
}

// Validation for password
if (empty($password)) {
    $valid = false;
    $errors['password'] = 'Password is required.';
} elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
    $valid = false;
    $errors['password'] = 'Invalid password format.';
}

// Validation for confirm password
if (empty($confirm_password)) {
    $valid = false;
    $errors['confirm_password'] = 'Confirm password is required.';
} elseif ($confirm_password !== $password) {
    $valid = false;
    $errors['confirm_password'] = 'Passwords do not match.';
}

// If there are errors, return the errors array
if (!$valid) {
    echo json_encode($errors);
} else {
    // If all validations pass, you can process the data further
    // For example, store the data in a database, send emails, etc.
    echo "Form submitted successfully!";
}
?>
