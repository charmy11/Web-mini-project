<?php
include("connection.php");
// session_start();
// $id=$_SESSION['id'];
// echo $id."\n";
$id=$_GET['id'];
echo $id;
$del="DELETE FROM trainer WHERE trainer_id='$id'";
if(mysqli_query($con,$del))
{           
    echo"done";
    header("url=trainer.php");
}
else{
     echo "noooo";
     header(" url=trainer.php");
}
#header("location:trainer.php");
?>