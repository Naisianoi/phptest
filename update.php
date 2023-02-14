<?php
    include "config.php";

    $id=$_GET['updateid'];
    $sql="Select * from 'users' where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $first_name=$row['firstname'];
    $last_name=$row['lastname'];
    $email=$row['email'];
    $password=$row['password'];
    $gender=$row['gender'];

    if(isset($_POST['submit'])) {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }

    $sql = "update 'users' set id=$id, firstname='$first_name', lastname='$last_name', email='$email', password='$password', gender='$gender' where id=$id";

    //Execute my query
    $result = mysqli_query($con,$sql);

    if($result) {
        //echo "Updated successfully";
        header('location:display.php');
    }
    else {
        die(mysqli_error($con));
    }
    
?>


<!DOCTYPE html>
<html>
    <body>
        <h2>Sign Up Form</h2>

        <form action="" method="POST">
            <fieldset>
                <legend>Personal Information:</legend>
                First Name:<br>
                <input type="text" name="firstname" value=<?php echo $first_name;?>>
                <br>
                Last Name:<br>
                <input type="text" name="lastname" value=<?php echo $last_name;?>>
                <br>
                Email:<br>
                <input type="email" name="email" value=<?php echo $email;?>>
                <br>
                Password:<br>
                <input type="password" name="password" value=<?php echo $password;?>>
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <br><br>
                <input type="submit" name="submit" value="submit">Update
            </fieldset>
        </form>
        
    </body>
</html>