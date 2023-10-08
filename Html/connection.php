<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "bot-berna";

$con=new mysqli($serverName,$userName,$password,$databaseName);

if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();
}
?> 