<?php

    $con = mysqli_connect("localhost","mansi", "","taskphp");   //hostname, database username, password, database name
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>