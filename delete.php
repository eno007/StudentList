<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `studentinfo` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data deleted successfully!";
        header('location:display.php');
    }
}else{
    die(mysqli_error($conn));
}


?>