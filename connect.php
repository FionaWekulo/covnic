<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "covid";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if($conn->connect_error){
        die("Connection error:" .$conn->connect_error);
    }
    //if(!$conn){
        //echo 'connection error!'.mysqli_connect_error();
    //}

    
?>