<?php
require_once 'connection.php'; 
if(isset($_POST["UserID"]) && $_POST["UserID"] !== "") {

    $UserID = $_POST["UserID"];

   
    $query = "DELETE FROM users WHERE UserID = ?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $UserID);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "User deleted successfully";
        } else {
            echo "Error in delete command: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in prepare statement: " . mysqli_error($con);
    }
} else {
    echo "Invalid data provided for deletion";
}
?>