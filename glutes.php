<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join now</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link  rel="stylesheet" href="muscles.css">
                      
</head>
<body>
    <div  id="pic"> 

        <div id="navbar">
           
            <ul>
              <li>
              <p class="para">My Fitness Club </p>
              </li> 
            </ul>
      
            <ul>    
             
            
            <li><a href="cal.php">Calorie Calculator</a></li>
            <li><a href="pal.php">Macro Calculator</a></li>
            <li><a href="#">Premuim</a></li>
            <li><a href="/logout.php">LOGOUT</a></li>
          <li id="search"> <form action="" id="searchbar">
              <input type="text" placeholder="Search" name="search">
              <button type="submit">
                <img src="/image/search.jpg" height="20" width="20"></button>
          </form> </li>
        </ul>

            </div></div>
               <div id="muscles">
               Glutes
               </div>
                
               <div id="navb">
                      <ul>    
                      
                      <li><a href="glutes.php"><button type="button">Divers</button></li></a>
                      </ul>       
                    </div>
                    
          
                    <div id="poti">
                     <p id="sas"> ROMANIAN DEADLIFT & DUMBBELL ROMANIAN DEADLIFT<hr></p>
                     <i id="ip"><bold>Difficulty</bold>: Advanced</i>
                    </div>
                    <div>
                      <img src="https://fitnessprogramer.com/wp-content/uploads/2021/02/Barbell-Romanian-Deadlift.gif" id="photo1" width="400" height="400"/>
                      <img src="https://fitnessprogramer.com/wp-content/uploads/2021/02/Dumbbell-Romanian-Deadlift.gif" id="photo2" width="400"  height="400"/>
                    </div>
                    <div id="saz">
                      <div>
                        <p><i id="number">1</i>Once you have established your foot position, it’s time to hinge at the hips. Begin by standing tall with your shoulders back and your core engaged. From this position, slowly bend forward at the hips while maintaining a slight bend in your knees. This movement should feel like you are pushing your hips back, rather than simply bending forward.
 </p>
                      </div>
                      <div>
                       <p><i id="number">2</i>Begin the movement by hinging at the hips, pushing your glutes back while keeping your back straight.
Lower the dumbbells along the front of your legs, maintaining a slight bend in your knees and keeping the weights close to your body.
Continue to lower the dumbbells until you feel a stretch in your hamstrings or until you reach a comfortable range of motion.</p>
                      </div>
                        
                    </div>

                    <?php

require_once 'connection.php';

$query = "SELECT * FROM workouts WHERE workoutID ";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $level = $row["level"];
    $type = $row["type"];
   
    $image = $row["image"];
   
}
?>
 <div id="poti">
    <?php if (isset($name)): ?>
        <p id="sas"><?php echo $name; ?><hr></p>
        <i id="ip"><bold>Difficulty</bold>: <?php echo $level; ?></i>
        <div>
            <img src="<?php echo $image; ?>" id="photo1" width="400" height="400"/>
        </div>
    <?php else: ?>
        <p id="sas">Workout Not Available<hr></p>
    <?php endif; ?>
</div>
<div id="saz">
    <?php if (isset($type)): ?>
        <h3>type:</h3>
        <p><?php echo $type; ?></p>
    <?php else: ?>
        <p>type Not Available</p>
    <?php endif; ?>
</div>



                      <div id="pilo">
                        <hr>
                       <footer class="footer">
                        <h2 >My Fitness Club</h2>
                        <nav id="nav">
                             <a href="https://youtube.com/@FitnessGym-rb4qp" id="A1"><img src="/image/ytb.jpeg" width="50" height="35"/></a>
                             <a href="youtube" id="A2"><img src="/image/fcb.jpeg" width="50" height="35"/></a>
                             <a href="/image/inst.jpeg" id="A3"><img src="/image/inst.jpeg" width="45" height="35"/></a>
                        </nav>    
                       <div id="final">
                  
                       <h5 style="color: white;">IBRAHIM ZAKARIA | GRACE MOAWAD | TOUFIC NEHME <br>My Fitness Club<br> <a href=join.php>HOME</a></h5>
                      </div>
                      </footer></div>
              </body>
              </html>