<?php require  '../../templates/header.php'; ?>
<link rel="stylesheet" href="../../assets/css/business_signup.css">

<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Register</h3><br>
            <form action='http://localhost/php/tour_and_travels/src/controller/start_business_controller.php' method='POST' id='registrationForm'>
                <!-- User Name Input -->
                <input class='form-control' style='width:100%' type='text' name='name' id='name' placeholder='User Name'><br>
                <!-- Email Input -->
                <input class='form-control' style='width:100%' type='email' name='email' id='bemail' placeholder='Email'><br>
                <!-- Contact Input -->
                <input class='form-control' style='width:100%' type='tel' name='contact' id='bcontact' placeholder='Phone'><br>
                <!-- Property Input -->
                <input class='form-control' style='width:100%' type='text' name='property' id='bproperty' placeholder='Villa/Hotel'><br>
                <!-- Another Contact Input -->
                <input class='form-control' style='width:100%' type='tel' name='contact' id='bcontact' placeholder='Phone'><br>

                <!-- Submit Button -->
                <button class='btn btn-outline-secondary' type='submit'>Sign Up</button>
            </form>
            <!-- JavaScript File -->
            <script src='../../assets/js/business_signup.js'></script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>