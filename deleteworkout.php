<?php
require_once 'connection.php';

if(isset($_POST["workoutID"]) && $_POST["workoutID"] !== "") {

    $WID = $_POST["workoutID"];

    $query = "DELETE FROM workouts WHERE workoutID = '$WID'";
    $res = mysqli_query($con, $query);

    if(!$res) {
        echo("Error in delete command: " . mysqli_error($con)); // Display the MySQL error
    } else {
        echo("Workout has been deleted successfully");
    }
} else {
    echo("Invalid data provided for deletion");
}
?>
