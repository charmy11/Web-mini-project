<?php
include "connection.php";
$name=$_POST['name'];
$id=$_POST['id'];
$des=$_POST['description'];
$sql="INSERT into program (Name,Program_id,Description) VALUES ('$name','$id','$des')";
$check=mysqli_query($con,$sql);
if(!$check)
{
    echo"nooooo";
}
header("location:program.php");
?>