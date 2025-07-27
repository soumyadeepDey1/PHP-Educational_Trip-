<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="trip";
    $connection = mysqli_connect($server,$username,$password,$database);

    if (!$connection) {
        
        die ("Connection to the database failed due to " . mysqli_connect_error());
    }
?>