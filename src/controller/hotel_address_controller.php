<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $locality = htmlentities(trim($_POST['locality']));
    $pincode = htmlentities(trim($_POST['pincode']));
    $country = htmlentities(trim($_POST['country']));
    $state = htmlentities(trim($_POST['state']));
    $city = htmlentities(trim($_POST['city']));
    // Validation locality
    if (empty($locality)) {
        echo 'Name is required.';
    } elseif (strlen($locality) < 2) {
        echo 'Name should be above to 2 chracters';
    }

    // Validation pincode
    if (empty($pincode)) {
        echo 'pincode is required.';
    } elseif (strlen($pincode) == 6) {
        echo 'pincode should be 6 in length';
    }

    // Validate Country
    if (empty($country)) {
        echo "Please select a country.";
    }

    // Validate State
    if (empty($state)) {
        echo "Please select a state.";
    }

    // Validate City
    if (empty($city)) {
        echo "Please select a city.";
    }

    $model = new model();
    $result = $model->hotel_address_insertion($locality, $pincode, $country, $state, $city);

}
