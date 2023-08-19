<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="register.css"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
    }

    h2 {
      color: #333;
      text-align: center;
    }

    .container {
      min-height: 130vh;
    margin: auto;
    padding: 10px;
    background-size: cover;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    


    .btn-container {
      text-align: center;
    }

    .next-btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .next-btn:hover {
      background-color: #45a049;
    }

  .page {
      display: none;
     
    }

    .page.active {
      display: block;
      
    }
 
  </style>
</head>
<body>

    <div class="container">
        <form class="registration-form" action="register2.php" method = "POST" onsubmit = "return checkall()" >
            <h1>Register</h1>
            
            <label for="name">name</label>
            <input type="text" id="name" name="name" required>
            
            <div id="inputbox">
            <label for="email">Email</label>
                        <input type="email" id="email" name="email" onblur = "checkemail()" placeholder="Email"  required>
                        <span id = "errmail"></span>
                    </div>

            <div id="inputbox">
            <label for="password">Password</label>
                        <input type="password" name="password" id="password" onblur = "checkpassword()" placeholder="password(6+ characters)" required>
                        <span id = "errpassword"></span>
                    </div>

            <label for="age">Age</label>
            <input type="text" id="age" name="age" required>
            
            <button type="submit">Register</button>
        </form>
        
    </div>
    <script>
     function checkemail(){
        let email = document.getElementById("email").value;
        let msg = document.getElementById("errmail");
         if(email.match(/\b\w+@\w+\.[a-zA-Z]+\b/)){
            msg.style.visibility = "hidden";
            return true;
         }
          else if(email == ""){
            msg.innerHTML = "your email must be like : example123@example.example";
            msg.style.color = "red";
            msg.style.visibility = "visible";
            return false;
          }
          else{
            msg.innerHTML = "your email must be like : example123@example.example";
            msg.style.color = "red";
            msg.style.visibility = "visible";
            return false;
          }
     }
     function checkpassword(){
        let password = document.getElementById("password").value;
        let msg = document.getElementById("errpassword");
         if(password.length<6){
           msg.innerHTML="your password must be at least 6 characters";
           msg.style.color = "red";
           msg.style.visibility="visible";
           return false;
        } 
          else{
            msg.style.visibility="hidden";
            return true;
          }
     }
     function checkall(){
        if(checkemail() && checkpassword()) return true;
        return false;
     }
   </script>
</body>
</html>
