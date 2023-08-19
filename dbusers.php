<?php
       
       include 'connection.php';
       $query = "SELECT * FROM users";
       $result = mysqli_query($con,$query);

       if (!$result) 
           echo "Database access failed: " . mysqli_error($con);
       
       
       else{
           $r = mysqli_num_rows($result);
         
           
           $query2 = "SELECT * FROM users";
           $result2 = mysqli_query($con,$query2);
           echo "printing results using fetch associative method <br/>";
           for($i=0; $i<$r; $i++)
           {
               $rowA = mysqli_fetch_assoc($result2);
               echo "<br/>UserID=".$rowA['UserID']."<br/>";
               echo "  name=".$rowA['name'] ."<br/>";
               echo "  email=".$rowA['email'] ."<br/>";
               echo" age = ".$rowA['age']."<br/>";
               echo "################" ."<br/>";
           }


       }

       ?>