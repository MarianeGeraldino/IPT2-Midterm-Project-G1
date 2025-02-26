<?php
    $server_name = "localhost";
    $db_name = "new_db";
    $db_username = "root";
    $db_password = "1234";

    // attempting connection to database
    $conn = new mysqli($server_name,$db_username,$db_password,$db_name);

    if($conn->connect_error){
        die("Database connection failed. $conn->connect_error");
    }
    else{
        echo "Connection successful.";
    }

?>