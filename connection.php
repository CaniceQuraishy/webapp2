<?php
error_reporting(0);
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname="signupform";

    $conn= mysqli_connect($servername,$username,$password,$dbname);

    $mysqli= new mysqli("localhost", "root", "","signupform");

    if ($conn)
    {
        //echo"Connection ok";
    }
    else{
        echo"Connection failed".mysqli_connect_error();
    }
?>