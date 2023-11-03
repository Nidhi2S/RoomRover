<?php require  '../../templates/header.php';
?>
<link rel="stylesheet" href="../../assets/css/business_signup.css">
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Login</h3><br>
            <form action='http://localhost/php/tour_and_travels/src/controller/business_signup_controller.php' method='POST' id='registrationForm'>
                <!-- EMAIL -->
                <input class='form-control' style='width:100%' type='text' name='email' id='email_id' placeholder='Email'>
                <div class="text-danger" id="email_error" ></div><br>                
                <!-- PASSWORD -->
                <input class='form-control' style='width:100%' type='password' name='password' id='password_id' placeholder='Password'>
                <div class="text-danger" id="password_error" ></div><br>
                <button class='btn btn-outline-secondary' type='submit'>Login</button>
            </form>
            <script src='../../assets/js/business_signup.js'></script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>