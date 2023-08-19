<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Workouts</title>
    </head>
    <body>
        <?php
       
        include 'connection.php';
        $query = "SELECT * FROM workouts";
        $result = mysqli_query($con,$query);

        if (!$result) 
            echo "Database access failed: " . mysqli_error($con);
        
        
        else{
            $r = mysqli_num_rows($result);
           echo "The result contains $r rows<br/>";
           /* echo "printing results using fetch row method <br/>";
            for($i=0; $i<$r; $i++)
            {
                $row = mysqli_fetch_row($result);
                echo "<br/>workoutID=".$row[0]."<br/>";
                echo "  fname=".$row[1] ."<br/>";
                echo "  lname=".$row[2] ."<br/>";
                echo "################" ."<br/>";
            }*/
            
            $query2 = "SELECT * FROM workouts";
            $result2 = mysqli_query($con,$query2);
            echo "printing results using fetch associative method <br/>";
            for($i=0; $i<$r; $i++)
            {
                $rowA = mysqli_fetch_assoc($result2);
                echo "<br/> workoutID=".$rowA['WorkoutID']."<br/>";
                echo "  name=".$rowA['name'] ."<br/>";
                echo "  type=".$rowA['type'] ."<br/>";
                echo "################" ."<br/>";
            }


        }

        ?>
        
    </body>
</html>
