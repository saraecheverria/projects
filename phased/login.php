<?php include ("header.php"); 

if(isset($_POST['login'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    if (DB::query('SELECT username FROM users WHERE username=:username', array(':username' => $username))) { 

        if($password==DB::query('SELECT password FROM users WHERE username=:username', 
        array(':username' => $username))[0]['password']){ 
            
            setcookie("phased", $loggedin, time () + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
            $_SESSION['loggedin'] = true; 
            $_SESSION['username'] = $username; 
            $_SESSION['password'] = $password; 

            $_SESSION["userid"] = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$_SESSION['username']))[0]['id'];
        
            echo "<div class='alerts'>  <p>You are now logged in! Click <a href='index.php'>Home</a> to access features</p> </div>";   

    }else { 
            echo "<div class='alerts'>  <p>Incorrect Password!</p> </div>";
    }

    }else { 
        echo "<div class='alerts'>  <p>Please try again!</p> </div>"; 
        }
    } 


?>  


    <body>
<br> 
<br> 
  
            <div class = "grid"> 
                <div class ="login"> 
                <fieldset> 
                      <h1>Login to your account</h1>
                      
                      <form action = "login.php" method = "post"> 
                      <input type ="text" name ="username" value="" placeholder = "Username ..."> <br> <br> 
                      <input type ="password" name="password" value="" placeholder="Password ..." /> <br> <br> 
          
                  
                      <br> 
                     
          
                      <input type="submit" name="login" value="Login" style="margin-left: 300px; margin-bottom: 10px; "> 
                  
                    </form>
                  </fieldset> 
            </div> 
            </div> 

                  <br>
                  <br> 
                  <br> 
    
        <div class="footer">
            <img src = "img/bluelogo.png" alt="Phased Logo" width=60px height=60px> 
            <p><strong> This site is not official and is an assignment for a UCF Digital Media course | Copyright 2020 Phased</strong></p>
        </div>
                


    </body>
    </html>