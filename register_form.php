<!-- <!DOCTYPE html>
<html>
    <head><title>yoo</title>
</head>
<body> -->


<?php
include "connection.php";

$username=$_POST['name'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$sql="INSERT into member (name,phone,gender) VALUES ('$username','$phone','$gender')";

/*if(!mysqli_query($con,$sql)){
    die('error insertinf record');}
else
echo"inserted";*/
mysqli_query($con,$sql);

$id="SELECT member_id FROM member WHERE phone='$phone' AND name='$username' ";


$res=mysqli_query($con,$id);
 

$data=mysqli_fetch_row($res);
echo $data[0];
$memid=$data[0];

?>
<!DOCTYPE html>
<html>
    <head>
    <title></title>
</head>
<body>
    <form method="POST" action="add.php">
        <p>Your member id is:</p>
        
        <input type="text" value=<?php echo $data[0] ?> name="memid">
        <p>Chose Program</p>
        <select name="prog">
            <?php
            $pr_sql="SELECT Name, Program_id FROM program";
            $pr_res=$pr_mysqli_query($con,$pr_sql);
            if(mysqli_num_rows($pr_res)>0)
            {

                while($row=mysqli_fetch_array($pr_res))
                {
                    ?>
                    <option value=<?php echo $row['Program_id']  ?>><?php  echo $row['Name'];
                     ?></option>

                }
            }
            
            
           
            
        </select>
        <!-- <select name="trainer">
            <option>T1</option>
            <option>T2</option>
        </select> -->
        <input type="submit" value="submit" name="submit">

</form>
</body>
</html>
