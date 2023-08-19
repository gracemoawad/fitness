<?php
require_once 'connection.php';

if(isset($_POST["workoutID"])&&($_POST["workoutID"]!=" ")&&
isset($_POST["name"])&&($_POST["name"]!=" ")&&
isset($_POST["type"])&&($_POST["type"]!=" ")&&
isset($_POST["level"])&&($_POST["level"]!=" ")&&
isset($_POST["image"])&&($_POST["image"]!=" ")){

$WID=$_POST["workoutID"];
$name=$_POST["name"];

$level=$_POST["level"];
$type=$_POST["type"];
$image=$_POST["image"];




$query="INSERT INTO workouts VALUES('$WID','$name','$level','$type','$image')";
echo $query;
$res=mysqli_query($con,$query);

If(!$res)
{
    echo("error in insert command");
   
}
else
{
    echo("a new workout has been inserted successfully");
}
}
?>