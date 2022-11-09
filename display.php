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
            <button class="btn btn-primary my-5"><a href="index.php" class="text-light"> Add Student</a>
        </button>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID </th>
                <th scope="col">Name Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Contact number</th>
                <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql="SELECT * FROM `studentinfo`";
            $result=mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['fullname'];
                    $email=$row['email'];
                    $number=$row['phonenumber'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$number.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="edit.php? editid='.$id.'" class="text-light">Edit</a></button>
                    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                    </tr>';
                }
            }


?>
              
            </tbody>
            </table>
                    </div>

                </body>
