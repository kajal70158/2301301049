<?php
ini_set("display_errors",1);
session_start();
$hostname="localhost";//127:0:01
$username="root";
$password="";
$database="bmst1";

// $conn = new mysqli($host,$username,$password,$db);
$conn = new mysqli("localhost","root","","bmst1");
if($conn->connect_error){
    echo'failed';
}else{
    echo'pass';
}
?>