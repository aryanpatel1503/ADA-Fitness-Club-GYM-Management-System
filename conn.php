<?php  

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ada";
    $con = mysqli_connect($host, $user, $pass, $db);

    if (!$con) {
        die("can't connect. Connection Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
    }

?>