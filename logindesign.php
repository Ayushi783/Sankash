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
    $Password = $_POST('password');

    $sql = "INSERT INTO login (Username,Password) VALUES ('$Name', '$Password') ";

    if(!mysqli_query($con, $sql))
    {
    	echo 'Not Inserted';
    }
    else
    {
    	echo 'Inserted';
    }
    header("refresh:8; url=logindesign.html");
?>