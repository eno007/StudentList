<?php
include 'connect.php';
if(isset($_POST['add_Btn'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $PhoneNumber=$_POST['PhoneNumber'];

    $sql="INSERT INTO `studentinfo` (fullname, email, PhoneNumber) 
    VALUES ('$fullname','$email','$PhoneNumber')";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add student</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form method="post" action="index.php">
            <h1>Add Student Information</h1>
            <div class="textBox">
                <input type="text" placeholder="Name Surname" name="fullname">
            </div>
            <div class="textBox">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="textBox">
                <input type="text" placeholder="Contact Number" name="PhoneNumber">
            </div>
            <input type="submit" value="Add Student" class="addBTN" name="add_Btn">
            <div class="back">
                Finished?
            </br>
                <a href="display.php">Go back</a> 
            </div>
        </form>
    </body>
</html>
