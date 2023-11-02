<!-- Connect to DB -->
<?php require  '../../templates/header.php';
// Remember me
if (isset($_COOKIE['remember_me_email']) && ($_COOKIE['remember_me_password'])) {
    $remember_email = $_COOKIE['remember_me_email'];
    $remember_password = $_COOKIE['remember_me_password'];
} else {
    $remember_email = "";
    $remember_password = "";
}
?>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Connect To CSS -->
<link rel="stylesheet" href="../../assets/css/business_signup.css">
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Login</h3><br>
            <form action='http://localhost:8000/src/controller/business_login_controller.php' method='POST' id='registrationForm'>
                <!-- EMAIL -->
                <input class='form-control' style='width:100%' type='text' name='email' id='email_id' placeholder='Email' value='<?php echo $remember_email ?>'>
                <div class="text-danger" id="email_error"></div><br>
                <!-- PASSWORD -->
                <input class='form-control' style='width:100%' type='password' name='password' id='password_id' placeholder='Password' value='<?php echo $remember_password ?>'>
                <i id="toggle-password" class="fa-solid fa-eye"></i>
                <!-- REMEMBER ME -->
                <input class='form-check-input' type='checkbox' name='remember_me' id='remember_me_id'>
                <label class='form-check-label' for='remember_me_id'>Remember Me</label><br>
                <div class="text-danger" id="password_error"></div>
                <!-- LOGIN -->
                <button class='btn btn-outline-secondary' type='submit'>Login</button>
            </form>
            <script src="../../assets/js/business_login.js">

            </script>

        </div>
    </div>
</div>
<!-- connect to footer -->
<?php require '../../templates/footer.php' ?>