<?php
    include "config.php";

?>

<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <div class="container">
            <button class="button"><a href="create.php">Add User</a></button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">gender</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="Select * from 'users'";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $first_name=$row['firstname'];
            $last_name=$row['lastname'];
            $email=$row['email'];
            $password=$row['password'];
            $gender=$row['gender'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$first_name.'</td>
            <td>'.$last_name.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>'.$gender.'</td>
            <td>
            <button class="button"><a href="update.php?updateid='.$id.'">Update</a></button>
            <button class="button"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
          </tr>';
        }
    }
    ?>

  </tbody>
</table>
        </div>
    </body>
</html>