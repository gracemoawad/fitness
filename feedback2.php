<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("location:index.html");
} else {
    require_once 'connection.php';
    $rating = $_POST['rating'];
    $comment = $_POST['comments'];
    $userID = $_SESSION['UserID'];
    $query = "INSERT INTO feedback VALUES (NULL,'$userID','$rating','$comment')";
    $res = mysqli_query($con, $query);
    if ($res) header("location:feeback.php");
}
?>