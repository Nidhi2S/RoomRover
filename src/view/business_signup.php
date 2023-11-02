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
            <form action='http://localhost:8000/src/controller/business_signup_controller.php' method="POST" id='registrationForm'>
                <!-- NAME -->
                <input class='form-control' style='width:100%' type='text' name='name' id='name_id' placeholder='User Name'>
                <div class="text-danger" id="name_error"></div><br>
                <!-- EMAIL -->
                <input class='form-control' style='width:100%' type='text' name='email' id='email_id' placeholder='Email'>
                <div class="text-danger" id="email_error"></div><br>
                <!-- CONTACT -->
                <input class='form-control' style='width:100%' type='tel' name='contact' id='contact_id' placeholder='Phone'>
                <div class="text-danger" id="contact_error"></div><br>
                <!-- PROPERTY -->
                <label for="property">Property:</label>
                <select name="property" id="property_id">
                    <option value="">select</option>
                    <option value="Villa">Villa</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Resort">Resort</option>
                </select>
                <div class="text-danger" id="property_error"></div><br>
                <!-- PASSWORD -->
                <input class='form-control' style='width:100%' type='password' name='password' id='password_id' placeholder='Password'>
                <div class="text-danger" id="password_error"></div>
                <!-- EYE BUTTON -->
                <span class="input-group-text" id="password-addon"><i class="fas fa-eye" id="password_eye" onclick="togglePassword('password_id', 'password_eye')"></i></span><br>
                <!-- CONFIRM PASSWORD -->
                <input class='form-control' style='width:100%' type='password' name='confirm_password' id='confirm_password_id' placeholder='Confirm Password'>
                <div class="text-danger" id="confirm_password_error"></div>
                <span class="input-group-text" id="confirm-password-addon"><i class="fas fa-eye" id="confirm_password_eye" onclick="togglePassword('confirm_password_id', 'confirm_password_eye')"></i></span><br>
                <!-- BUTTON -->
                <button class='btn btn-outline-secondary' type='submit'>Sign Up</button>
            </form>
            <!-- <script src='../../assets/js/business_signup.js'></script> -->
            <script>
                function togglePassword(inputId, eyeId) {
                    const inputElement = document.getElementById(inputId);
                    const eyeElement = document.getElementById(eyeId);

                    if (inputElement.type === 'password') {
                        inputElement.type = 'text';
                        eyeElement.classList.remove('fa-eye');
                        eyeElement.classList.add('fa-eye-slash');
                    } else {
                        inputElement.type = 'password';
                        eyeElement.classList.remove('fa-eye-slash');
                        eyeElement.classList.add('fa-eye');
                    }
                }
            </script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>