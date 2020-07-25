<?php
include "connection.php";
$name=$_POST['name'];
$id=$_POST['id'];
$phone=$_POST['phone'];
$program=$_POST['program'];
$sql="INSERT into trainer (name,trainer_id,phone,programe) VALUES ('$name','$id','$phone','$program')";
$check=mysqli_query($con,$sql);
if(!$check)
{
    echo"nooooo";
}
header("location:trainer.php");
?>