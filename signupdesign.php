<?php
    
    $con = mysqli_connect('127.0.0.1','root');

    if(!$con)
    {
    	echo 'not connected to server';
    }
    if(!mysqli_select_db($con,sankash))
    {
    	echo "Database connected"
    }

    $Username = $_POST('username');
    $Type = $_POST('type');
    $Password = $_POST('password');

    $sql = "INSERT INTO signin (Username, Type, Password) VALUES ('$Name', '$Type', '$Password') ";

    if(!mysqli_query($con, $sql))
    {
    	echo 'Not Inserted';
    }
    else
    {
    	echo 'Inserted';
    }
    header("refresh:8; url=signupdesign.html");
?>


