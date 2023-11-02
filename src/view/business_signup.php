<?php require  '../../templates/header.php';
?>
<link rel="stylesheet" href="../../assets/css/business_signup.css">
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Register</h3><br>
            <form action='http://localhost/php/tour_and_travels/src/controller/business_signup_controller.php' method='POST' id='registrationForm'>
                <!-- NAME -->
                <input class='form-control' style='width:100%' type='text' name='name' id='name_id' placeholder='User Name'>
                <div class="text-danger" id="name_error" ></div><br>
                <!-- EMAIL -->
                <input class='form-control' style='width:100%' type='text' name='email' id='email_id' placeholder='Email'>
                <div class="text-danger" id="email_error" ></div><br>
                <!-- CONTACT -->
                <input class='form-control' style='width:100%' type='tel' name='contact' id='contact_id' placeholder='Phone'>
                <div class="text-danger" id="contact_error" ></div><br>
                <!-- PROPERTY -->
                <label for="property">Property:</label>
                <select name="property" id="property_id">
                    <option value="">select</option>
                    <option value="Villa">Villa</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Resort">Resort</option>
                </select>
                <div class="text-danger" id="property_error" ></div><br>
                <!-- PASSWORD -->
                <input class='form-control' style='width:100%' type='password' name='password' id='password_id' placeholder='Password'>
                <div class="text-danger" id="password_error" ></div><br>
                <!-- CONFIRM PASSWORD -->
                <input class='form-control' style='width:100%' type='password' name='confirm_password' id='confirm_password_id' placeholder='Confirm Password'>
                <div class="text-danger" id="confirm_password_error" ></div><br>


                <button class='btn btn-outline-secondary' type='submit'>Sign Up</button>
            </form>
            <script src='../../assets/js/business_signup.js'></script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>