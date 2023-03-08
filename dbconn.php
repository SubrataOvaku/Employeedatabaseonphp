<!--this is php page
    this page used to connect on database
-->
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'crud';
    $conn = mysqli_connect($servername,$username,$password,$database);
?>