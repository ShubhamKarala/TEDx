<?php

$userName = "root";
$password = "";
$server = "localhost";
$db = "webtesting";

$connect = mysqli_connect($server, $userName,$password,$db);

if($connect){
    // echo " Success";
}
else{
    die("no connection". mysqli_connect_error());
}
?>