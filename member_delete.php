<?php
include("connection.php");
$id=$_GET['id'];
$del="DELETE FROM member where member_id=$id ";
mysqli_query($con,$del);
#header("location:member.php");
?>