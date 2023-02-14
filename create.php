<?php
    include "config.php";

    if(isset($_POST['submit'])) {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }

    $sql = "INSERT INTO 'users' ('firstname', 'lastname', 'email', 'password', 'gender') VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

    $result = mysqli_query($con,$sql);

    if($result) {
        //echo "New record created successfully";
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
                <input type="text" name="firstname">
                <br>
                Last Name:<br>
                <input type="text" name="lastname">
                <br>
                Email:<br>
                <input type="email" name="email">
                <br>
                Password:<br>
                <input type="password" name="password">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <br><br>
                <input type="submit" name="submit" value="submit">Submit
            </fieldset>
        </form>
        
    </body>
</html>