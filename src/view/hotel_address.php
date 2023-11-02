<?php require  '../../templates/header.php';
?>
<!-- <link rel="stylesheet" href="../../assets/css/business_signup.css"> -->
<style>
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Register</h3><br>
            <form action='http://localhost:8000/src/controller/hotel_address_controller.php' method="POST" id='registrationForm'>
                <!-- locality -->
                <input class='form-control' style='width:100%' type='text' name='locality' id='locality_id' placeholder='locality/building'><br>

                <!-- pincode -->
                <input class='form-control' style='width:100%' type='text' name='pincode' id='pincode_id' placeholder='pincode'><br>

                <!-- COUNTRY -->
                <div>
                    <label for="country">Country:</label><br>
                    <select name="country" id="country" onchange="fetchStates()">
                        <option value="">select country</option>
                    </select>
                </div>

                <!-- STATE -->
                <div>
                    <label for="state">State:</label><br>
                    <select name="state" id="state" onchange="fetchCities()">
                        <option value="">select state</option>
                    </select>
                </div>

                <!-- CITIES -->
                <div>
                    <label for="cities">Cities:</label><br>
                    <select name="city" id="city">
                        <option value="">select city</option>
                    </select>
                </div><br>
                <!-- terms and policies -->
                <input type="checkbox" name="terms" id="terms"> I agree to the terms and policies<br>

                <!-- BUTTON -->
                <button class='btn btn-outline-secondary' type='submit'>Sign Up</button>
            </form>

        </div>
    </div>
</div>
<script src="../../assets/js/hotel_address.js"></script>
<?php require '../../templates/footer.php' ?>