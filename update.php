<?php 
    require 'dbconn.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $pincode = $_POST["pincode"];
    }
    $sql = "UPDATE `employee` SET `Id`='$id',`Name`='$name',`phone_no`='$number',`email_id`='$email',`city`='$city',
            `state`='$state',`country`='$country',`pincode`='$pincode' WHERE Id = $id";
    mysqli_query($conn, $sql);
    header("Location:registation.php");

?>