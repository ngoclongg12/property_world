<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "property_world";

$connect = mysqli_connect($localhost, $username, $password, $dbname);

if($connect){
    $setLanguage = mysqli_set_charset($connect, 'utf-8');
}
else{
    die("ket noi that bai".mysqli_connect_error());
}
