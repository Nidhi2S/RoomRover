<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="../../assets/css/client_signup.css">
    <style>
     
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form action="../controller/business_signup_controller.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>

            <label for="hotel">Property:</label><br>
            <input type="text" id="property" name="property"><br><br>

            <label for="contact">Contact No:</label><br>
            <input type="text" id="contact" name="contact"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <div class="password-container">
                <label for="password">New Password:</label><br>
                <input type="password" id="password" name="password">
                <i class="fa-solid fa-eye eye-icon" id="togglePassword"></i>
                <!-- <img src="eye-icon.png" class="eye-icon" id="togglePassword" onclick="togglePasswordVisibility('password')"> -->

            </div><br><br>

            <div class="password-container">
                <label for="confirm_password">Confirm Password:</label><br>
                <input type="password" id="confirm_password" name="confirm_password">
                <i class="fa-solid fa-eye eye-icon" id="toggleConfirmPassword"></i>
                <!-- <img src="eye-icon.png" class="eye-icon" id="toggleConfirmPassword" onclick="togglePasswordVisibility('confirm_password')"> -->
            </div><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="../../assets/js/client_signup.js">  </script>


</body>

</html>