<?php
$conn=new mysqli("localhost", "root", "Albania@!007", 'studentdata');
if(!$conn){
    die(mysqli_error($conn));
}
?>