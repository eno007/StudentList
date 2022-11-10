<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student List</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="index.php" class="text-light"> Add student</a>
        </button>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID </th>
                <th scope="col">Fullname</th>
                <th scope="col">Birthday</th>
                <th scope="col">Email</th>
                <th scope="col">Contact number</th>
                <th scope="col">Edit/Delete</th>
                <th scope="col">Created Date</th>
                <th scope="col">Last Modified</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql="SELECT * FROM `studentinfo`";
            $result=mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $fullname=$row['fullname'];
                    $birthday=$row['birthday'];
                    $email=$row['email'];
                    $number=$row['phonenumber'];
                    $created=$row['creation_time'];
                    $lastUpdatetime=$row['last_update'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$fullname.'</td>
                    <td>'.$birthday.'</td>
                    <td>'.$email.'</td>
                    <td>'.$number.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="edit.php?editid='.$id.'" class="text-light">Edit</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                    <td>'.$created.'</td>
                    <td>'.$lastUpdatetime.'</td>
                    </tr>';
                }
            }


?>
              
            </tbody>
            </table>
                    </div>

                </body>
