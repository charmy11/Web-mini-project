<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title >Add trainer</title>
        <link rel="stylesheet" type="text/css" href="program.css">
</head>

<body>
    <nav>
        <ul>
           
                <!---- <li> <a href="#">Programmes</a></li>
            <li><a href="#">Gym</a></li>
            <li> <a href="admin.html">Admin</a></li>-->
        </ul>
    </nav>
    <div class=sidebar>
        <a href="member.php">MEMBERS</a>
        <a href="trainer.php">TRAINERS</a>
        <a href="program.php">PROGRAMS</a>
        <a href="Member_trainer.php">MEMBER_TRAINER</a>
        <a href="Trainer_program.php">TRAIN_PROG</a>
    </div>


<div  class="content">
    <div class="extra">
    <form action="program_submit.php" method="post" class="decorate">
    <p>Name</p>
    <input type="text" name="name" placeholder="Enter name of program" required>
    <p>Program ID</p>
    <input type="text" name="id" placeholder="Enter Program id" required>
    <p>Description</p>
    <input type="text" name="description" placeholder="Enter description" required>
    <input type="submit" name="submit" value="SUBMIT">
</form>
</div>
</div>
</div>


</body>
</html>
