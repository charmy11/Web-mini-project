<?php
$password="";
$database="gym";
$username="root";
$server="localhost";
$con=mysqli_connect($server,$username,$password,$database);  

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    
}

?>