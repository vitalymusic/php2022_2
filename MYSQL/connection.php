<?php 

error_reporting(0);

$conn = mysqli_connect("localhost","root","root","php2022");

if(!$conn){
    die("Not connected to DB " . mysqli_connect_error());
}






//var_dump($conn);

?>