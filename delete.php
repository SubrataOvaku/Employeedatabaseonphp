<!--this is php page
    this page used to delete data from database
-->
<?php
    require 'dbconn.php';
    $id = $_GET["id"];
    $sql = "DELETE  FROM `employee` where Id=$id";
    $result = $conn->query($sql);
    header("Location:registation.php");
?>