<!--this is a php page 
    this page used for data insert into database- 
-->
<?php 
    require 'dbconn.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST["name"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $pincode = $_POST["pincode"];
    }
    $sql = "INSERT INTO employee (`Id`, `Name`, `phone_no`, `email_id`, `city`, `state`, `country`, `pincode`)
             VALUES ('','$name','$number',' $email','$city','$state','$country','$pincode')";
    mysqli_query($conn, $sql);
    header("Location:registation.php");

?>