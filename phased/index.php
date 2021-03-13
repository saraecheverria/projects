<?php include ("header.php"); 
if(isset($_POST['createaccount'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $email = $_POST['email']; 
    $zipcode = $_POST['zipcode']; 

    if (!DB::query('SELECT username FROM users WHERE username=:username', array (':username' => $username))) {

        if (strlen($username) >= 3 && strlen($username) <= 32) {

            if(preg_match('/[a-zA-Z0-9_]+/', $username)){ 

                if(strlen($password) >= 6 && strlen($password) <= 60) { 

                if(strlen($zipcode) >=4 && strlen($zipcode) <= 5) { 

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 


        DB::query(' INSERT INTO users VALUES (null, :username, :password, :email, :zipcode)', array(':username'=>$username, ':password'=>$password, ':email'=>$email, ':zipcode'=>$zipcode) );
        echo "<div class='alerts'>  <p>You have successfully registered!</p> </div>"; 

                }else{ 
                    echo "<div class='alerts'>  <p>Invalid email!</p> </div>"; 
                }

            } else { 
                echo "<div class='alerts'>  <p>Invalid zip code!</p> </div>"; 
            }

            }else { 
                echo "<div class='alerts'>  <p>Invalid password!</p> </div>"; 
            }


            } else { 
                echo "<div class='alerts'>  <p>Invalid username!</p> </div>"; 
            }

        } else { 
            echo "<div class='alerts'>  <p>Unsuccessful!</p> </div>"; 
        }


    }else { 
            echo "<div class='alerts'>  <p>User already exists!</p> </div>"; 
    }
}


?> 

<br>
<br> 
<br> 


    
<div class="grid">
    <div class="welcome"> 
        <h1>Welcome to</h1>
            <img src="img/logo.png" alt="phased logo" class = "animate-pop-in" width="500px">
                <h1>Together, from a distance.</h1>
    </div>



    <div class="signUpForm">

<br> 

        <fieldset> 
            <h2>Sign Up Today!</h2>
            
             <form action="index.php" method="post">
            
            <input type ="text" name ="username" value="" placeholder = "Username ..."> <br> <br> 
            <input type ="password" name="password" value="" placeholder="Password ..." /> <br> <br> 
            <input type="email" name ="email" value="" placeholder="someone@somesite.com"> <br> <br> 
            <input type="text" name ="zipcode" value="" placeholder="Zip Code ..."> <br> <br> 
            <br> <br> 
            <input type="submit" name="createaccount" style ="margin-left: 180px;" value="Create Account"> 
<br> 
<br> 
            
            </form>           
        </fieldset> 

    </div> 

    <div class="about"> 

    <fieldset> 
        <h2>About Us</h2> 
            
        <p> Hi, we are so excited that you are here! We are Phased, an online platform built to keep communities of people connected through the uncertainties of COVID-19. 
            Unfortunately in an effort to keep one another safe, social distancing restrictions have weakened or severed our sense of togetherness. 
            As a result, we aimed to create one place where members can actively get involved in their cities fight against the spread of COVID-19, by keeping each 
            other in the loop! By expanding our voices, we are giving ones to the small buisness owners, who need a way to connect with their 
            community base as they try to survive this pandemic. During these unprecedented times, where so many are struggling, more than anything we hope to help make things a little bit easier for you and your family. </p>  

        <p> Browse your News Feed to find updates posted by other users in your area, and even post your own findings! If a store is closed or does not adhere to the previous stated hours of operations, share it! 
            If you found where to receive rapid coronavirus tests, share it! If you became ill and are feeling a lot better, share it!
            Visit our Resources section and find links to volunteer opportunities or government aid. We can engage and remain together, from a distance.</p> 




    <div class="creators">               
        <h2>Meet the Creators</h2>
        <p>We are senior digital media students, specializing in web design, at the University of Central Florida. Amidst a global pandemic we 
                    have put our creative minds together to build Phased, to solve a real problem happening today in our communities.</p>
                    <br> 
                    <br> 
      
                <div class="gridCreators">
                    <div class="illiasAskew">
                        <img src="img/illias.jpg" alt="creator img">
                        <p>Illias Askew, Designer</p>
                    </div>
                    <div class="saraEcheverria">
                        <img src="img/sara.jpg" alt="creator img">
                        <p>Sara Echeverria, Developer</p>
                    </div>
                    <div class="samanthaFarls">
                        <img src="img/sam.jpg" alt="creator img">
                        <p>Samantha Farls, Content Strategist</p>
                    </div>
                    <div class="willardMarley">
                        <img src="img/imgwm.jpg" alt="creator img">
                        <p>Willard Marley, Developer</p>
                    </div>
                    <div class="williamSweginnis">
                        <img src="img/william.jpg" alt="creator img">
                        <p>William Sweginnis, Designer</p>
                    </div>
                </div>
                
            </div>
           
            
</div> 
</div> 
</fieldset> 

 

<div class="footer">
            <img src = "img/bluelogo.png" alt="Phased Logo" width=60px height=60px> 
            <p><strong> This site is not official and is an assignment for a UCF Digital Media course | Copyright 2020 Phased</strong></p>
        </div>

        
      

</body> 

</html> 