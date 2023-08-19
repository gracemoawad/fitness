<?php
require_once 'connection.php';

if (
    isset($_POST['email']) && $_POST['email'] != "" &&
    isset($_POST['password']) && $_POST['password'] != "" &&
    isset($_POST['name']) && $_POST['name'] != "" &&
    isset($_POST['age']) && $_POST['age'] != ""
) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $role = 10; 

    
    

   

  
    $query = "SELECT * FROM users WHERE email='$email'AND password='".$password."'";
    $result = mysqli_query($con, $query);

    

    if (mysqli_num_rows($result) > 0) {
        header("Location: /login.php?error=email_taken");
        exit();
    } else {
        // Insert the user's data into the database
        $insertQuery = "INSERT INTO users (RoleID, name, email, password, age) VALUES ('$role', '$name', '$email', '$password', '$age')";
        $insertResult = mysqli_query($con, $insertQuery);

        if ($insertResult) {
            header("Location: /home.php");
            exit();
        } else {
            header("Location: register.php?error=insert_failed");
            exit();
        }
    }
}
?>
