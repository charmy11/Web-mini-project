<!DOCTYPE html>
<html>

<head>
    <Title>Trainers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="member.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#">SEARCH</a></li>
            <li><a href="#">UPDATE</a></li>
            <li><a href="trainer_form.php">ADD</li>
                <!---- <li> <a href="#">Programmes</a></li>
            <li><a href="#">Gym</a></li>
            <li> <a href="admin.html">Admin</a></li>-->
        </ul>
    </nav>
    <div class=sidebar>
        <a href="member.php">MEMBERS</a>
        <a href="trainer.php">TRAINERS</a>
        <a href="Member_trainer.php">MEMBER_TRAINER</a>
        <a href="Trainer_program.php">TRAIN_PROG</a>
    </div>


<?php
    

    require("connection.php");
    $sql= "SELECT Name,Trainer_id,Phone,Programme from trainer";
    $result= mysqli_query($con,$sql);
    ?>
    <div class="content">
        <table class="table table-striped">
            <tr>
                <th>NAME</th>
                <th>TRAINER_ID</th>
                <th>PHONE</th>
                <th>PROGRAMME</th>
                <th>DELETE</th>
            </tr>
            <?php
            if(mysqli_num_rows($result)>0)
            {
                  while($row=mysqli_fetch_array($result))
                {
            ?>
            <tr>
            <td><?php echo $row['Name']; ?></td> 
            <td><?php echo $row['Trainer_id']; ?></td> 
            <td><?php echo $row['Phone']; ?></td> 
            <td><?php echo $row['Programme']; ?></td> 
            <td>
            <a href="delete.php">
            <i class='fas fa-trash'></i>
            </a>
                </td>
            </tr>
            <?php
            }
        }
        else{
            echo"0 rows";
        }
        ?>
        </table>
    </div>
</body>
</html>