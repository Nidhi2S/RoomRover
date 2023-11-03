<?php require  '../../templates/header.php'; ?>

<link rel="stylesheet" href="../../assets/css/business_signup.css">
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style='text-align: center;'>Hotel</h3><br>
            <!-- <h2>Registration Form</h2> -->
            <form action="../controller/hotel_controller.php" method="post">
                <!-- PROPERTY NAME -->
                <label for="property_name">Property Name:</label><br>
                <input type="text" id="property_name" name="property_name" placeholder="Your Property"><br><br>
                <!-- BOOKING YEAR -->
                <label for="booking_year">Booking Year:</label><br>
                <input type="text" id="booking_year" name="booking_year" placeholder="YYYY"><br><br>
                <!-- CONTACT NUMBER -->
                <label for="hotel_contact">Contact No:</label><br>
                <input type="text" id="hotel_contact" name="hotel_contact" placeholder="1234567890"><br><br>
                <!-- EMAIL -->
                <label for="hotel_email">Email:</label><br>
                <input type="email" id="hotel_email" name="hotel_email" placeholder="abc@gmail.com"><br><br>
                <!-- ROOMS AVAILABLE -->
                <label for="room_available">Rooms Available:</label><br>
                <input type="text" id="room_available" name="room_available" placeholder="00"><br><br>
                <!-- CHECK IN -->
                <label for="check_in_time">Check In:</label><br>
                <input type="text" id="check_in_time" name="check_in_time" placeholder="YYYY-MM-DD HH:MM"><br><br>
                <!-- CHECK OUT -->
                <label for="check_out_time">Check Out:</label><br>
                <input type="text" id="check_out_time" name="check_out_time"><br><br>
                <!-- CANCELLTAION POLICY -->
                <label for="cancellation_policy">Cancellation Policy:</label><br>

                <input type="radio" id="24_hours" name="cancellation_policy" value="24">
                <label for="24_hours">free cancellation upto 24 hours</label><br>

                <input type="radio" id="48_hours" name="cancellation_policy" value="48">
                <label for="48_hours">free cancellation upto 48 hours</label><br>

                <input type="radio" id="72_hours" name="cancellation_policy" value="72">
                <label for="72_hours">free cancellation upto 72 hours</label><br>

                <input type="radio" id="non_refundable" name="cancellation_policy" value="00">
                <label for="non_refundable">Non refundable</label><br>

<!-- BUTTON -->
                <input type="submit" value="Submit">
            </form>
            <!-- SCRIPT -->
            <script src='../../assets/js/business_signup.js'></script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>