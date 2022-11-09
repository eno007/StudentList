<?php
include 'connect.php';
$id=$_GET['editid'];
$sql="SELECT * FROM `studentinfo` WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['fullname'];
$email=$row['email'];
$number=$row['phonenumber'];

if(isset($_POST['add_Btn'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $PhoneNumber=$_POST['PhoneNumber'];

    $sql="UPDATE `studentinfo` 
    SET id=$id,fullname='$fullname', 
    email='$email', PhoneNumber='$PhoneNumber' 
    WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Updated successfully";
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
            <h1>Edit Student Information</h1>
            <div class="textBox">
                <input type="text" placeholder="Name Surname" name="fullname" value=<?php echo $name?>>
            </div>
            <div class="textBox">
                <input type="email" placeholder="Email" name="email" value=<?php echo $email?>>
            </div>
            <div class="textBox">
                <input type="text" placeholder="Contact Number" name="PhoneNumber" value=<?php echo $number?>>
            </div>
            <input type="submit" value="Edit" class="addBTN" name="add_Btn">
            <div class="back">
                Want to cancel??
            </br>
                <a href="display.php">Go back</a> 
            </div>
        </form>
    </body>
</html>