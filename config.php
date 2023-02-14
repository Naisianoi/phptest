<?php

    $con = new mysqli('localhost', 'root', 'gladys96', 'mydb');
    
    if(!$con) {
        die(mysqli_error($con));
    }
?>