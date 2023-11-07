<<<<<<< HEAD
<?php require  '../../templates/header.php';
?>
<?php
require '../../config/db_connect.php';
$query = 'SELECT * FROM hotel WHERE client_id = ' . $_SESSION['client_id'];
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $res = mysqli_fetch_assoc($result);
}

?>

<link rel='stylesheet' href='../../assets/css/business_signup.css'>
<div id='rq-side-menu' class='rq-side-menu'>
    <div class='rq-side-menu-widget-wrap' style='display: flex; justify-content:center;'>
        <div class='rq-login-form-wrapper'>
            <h3 style="margin-left: 20px;">Hotel Register</h3><br>
            <!-- <h2>Registration Form</h2> -->
            <form action='../controller/hotel_controller.php' method='post'>
                <!-- PROPERTY NAME -->
                <label for='property_name'>Property Name:</label><br>
                <input type='text' value="<?php if (isset($res['property_name']) && !empty($res['property_name'])) {
                                                echo $res['property_name'];
                                            } ?>" id='property_name' name='property_name' placeholder='Your Property'><br><br>
                <!-- BOOKING YEAR -->
                <label for='booking_year'>Booking Year:</label><br>
                <input type='text' value="<?php if (isset($res['booking_year']) && !empty($res['booking_year'])) {
                                                echo $res['booking_year'];
                                            } ?>" id='booking_year' name='booking_year' placeholder='YYYY'><br><br>
                <!-- CONTACT NUMBER -->
                <label for='hotel_contact'>Contact No:</label><br>
                <input type='text' value="<?php if (isset($res['hotel_phone']) && !empty($res['hotel_phone'])) {
                                                echo $res['hotel_phone'];
                                            } ?>" id='hotel_contact' name='hotel_contact' placeholder='1234567890'><br><br>
                <!-- EMAIL -->
                <label for='hotel_email'>Email:</label><br>
                <input type='email' value="<?php if (isset($res['hotel_email']) && !empty($res['hotel_email'])) {
                                                echo $res['hotel_email'];
                                            } ?>" id='hotel_email' name='hotel_email' placeholder='abc@gmail.com'><br><br>
                <!-- ROOMS AVAILABLE -->
                <label for='room_available'>Rooms Available:</label><br>
                <input type='text' value="<?php if (isset($res['rooms_available']) && !empty($res['rooms_available'])) {
                                                echo $res['rooms_available'];
                                            } ?>" id='room_available' name='room_available' placeholder='00'><br><br>
                <!-- CHECK IN -->
                <label for='check_in_time'>Check In Time :</label><br>
                <input type='text' value="<?php if (isset($res['check_in']) && !empty($res['check_in'])) {
                                                echo $res['check_in'];
                                            } ?>" id='check_in_time' name='check_in_time' placeholder='YYYY-MM-DD HH:MM'><br><br>
                <!-- CHECK OUT -->
                <label for='check_out_time'>Check Out Time :</label><br>
                <input type='text' value="<?php if (isset($res['check_out']) && !empty($res['check_out'])) {
                                                echo $res['check_out'];
                                            } ?>" id='check_out_time' name='check_out_time'><br><br>
                <!-- CANCELLTAION POLICY -->
                <?php $cancellation_policy  = $res['cancellation_policy']; ?>
                <input type="radio" id="24_hours" name="cancellation_policy" value="24" <?php echo ($cancellation_policy == '24') ? "checked" : ""; ?>>
                <label for="24_hours">free cancellation up to 24 hours</label><br>

                <input type="radio" id="48_hours" name="cancellation_policy" value="48" <?php echo ($cancellation_policy == '48') ? "checked" : ""; ?>>
                <label for="48_hours">free cancellation up to 48 hours</label><br>

                <input type="radio" id="72_hours" name="cancellation_policy" value="72" <?php echo ($cancellation_policy == '72') ? "checked" : ""; ?>>
                <label for="72_hours">free cancellation up to 72 hours</label><br>

                <input type="radio" id="non_refundable" name="cancellation_policy" value="00" <?php echo ($cancellation_policy == '00') ? "checked" : ""; ?>>
                <label for="non_refundable">Non refundable</label><br>

                <!-- BUTTON -->
                <input type='hidden' name='hotel_id' value="<?php if (isset($res['id']) && !empty($res['id'])) {
                                                                echo $res['id'];
                                                            } ?>">
                <input type='submit' value='Submit'>
=======
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
>>>>>>> a6e148d (client login and hotel register)
            </form>
            <!-- SCRIPT -->
            <script src='../../assets/js/business_signup.js'></script>
        </div>
    </div>
</div>

<?php require '../../templates/footer.php' ?>