<?php require  '../../templates/header.php';
?>
<link rel="stylesheet" href="../../assets/css/business_signup.css">
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Register</h3><br>
            <form action='http://localhost/php/tour_and_travels/src/controller/business_signup_controller.php' method='POST' id='registrationForm'>
                <input class='form-control' style='width:100%' type='text' name='name' id='name_id' placeholder='User Name'><br>
                <input class='form-control' style='width:100%' type='email' name='email' id='email_id' placeholder='Email'><br>
                <input class='form-control' style='width:100%' type='tel' name='contact' id='contact_id' placeholder='Phone'><br>
                <input class='form-control' style='width:100%' type='text' name='property' id='property_id' placeholder='Villa/Hotel'><br>
                <input class='form-control' style='width:100%' type='password' name='password' id='password_id' placeholder='Password'><br>
                <input class='form-control' style='width:100%' type='password' name='confirm_password' id='confirm_password_id' placeholder='Confirm Password'>


                <button class='btn btn-outline-secondary' type='submit'>Sign Up</button>
            </form>
            <script src='../../assets/js/business_signup.js'></script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>