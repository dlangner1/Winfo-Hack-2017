<?php
    $name = $_POST["name"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $date = $_POST["date"];
    $start_time = $_POST["time"];
    $purpose = $_POST["purpose"];
    $long_description = $_POST["long"];

    // redirects the user to a particular page and then kills the page
    function redirect_page($location) {
        header("Location: $location");
        die();
    }

    file_put_contents("events.txt", "$name;$city;$state;$date;$start_time;$purpose;$long_description\n", FILE_APPEND);
    redirect_page("protests.php");






