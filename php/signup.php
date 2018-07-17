<?php
    include("config.php");
    if( $_SERVER["REQUEST_METHOD"]=="POST" ){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        $username =$_POST["username"];
 
    }
    
/* sends data to DB */

$sql = " INSERT into user (name,username,email,pass) values ( '$name', '$username','$email','$pass' ) ";


    if (mysqli_query($db,$sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql;
    }



?>