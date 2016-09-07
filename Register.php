<?php

 $con=mysqli_connect("localhost","my_user","my_password","my_db");
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];
	$country = $_POST ["country"];
    
    $statement = mysqli_prepare($con, "INSERT INTO User (name, age, username, password, country) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $name, $age, $username, $password, $country);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_close($statement);
    
    mysqli_close($con);

?>