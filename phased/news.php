<?php include ("header.php"); 
include('./classes/Comment.php');


$userid=$_SESSION['userid'];
$username=$_SESSION['username'];


if(isset($_POST['post'])) { 
    $postbody = $_POST['postbody']; 

    if(strlen($postbody) > 160 || strlen($postbody) <1 ) { 

        echo "<div class='alerts'>  <p>Your news failed to post! Not enough or too many characters. </p> </div>";   
    }

    DB::query('INSERT INTO posts VALUES (null, :postbody, NOW(), :userid, 0)', array(':postbody'=>$postbody, ':userid'=>$userid));
}


if(isset($_GET['postid'])) { 
    if (!DB::query('SELECT user_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$_GET['postid'], ':userid'=>$userid))) {
        DB:: query('UPDATE posts SET likes=likes+1 WHERE id=:postid', array(':postid'=>$_GET['postid'])); 
        DB::query('INSERT INTO post_likes VALUES (null, :postid, :userid)', array(':postid'=>$_GET['postid'], ':userid'=>$userid));

    } else {
        DB::query('UPDATE posts SET likes=likes-1 WHERE id=:postid', array(':postid'=>$_GET['postid']));
        DB::query('DELETE FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$_GET['postid'], ':userid'=>$userid));
}
}

if (isset($_POST['comment'])) {
        Comment::createComment($_POST['commentbody'], $_GET['postid'], $userid);
        
}

$dbposts = DB::query('SELECT * FROM posts ORDER BY id DESC', array(':userid'=>$userid));
$posts = "";
foreach($dbposts as $p) {
    if (!DB::query('SELECT post_id FROM post_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$p['id'], ':userid'=>$userid))) {

        $posts .= htmlspecialchars($p['body'])."
            <form action='news.php?username=$username&postid=".$p['id']."' method='post'>
                <input type='submit' name='like' value='Like'>
                <span>".$p['likes']." likes</span>
            </form>
            <br> 

            <form action='news.php?username=$username&postid=".$p['id']."' method='post'>
            <textarea name='commentbody' rows='3' cols='50'></textarea>
            <input type='submit' name='comment' value='Comment'>
            </form>
            <hr /></br />

            ";
            Comment::displayComments($p['id']);
            echo "
           "; 
            
    } else {
        $posts .= htmlspecialchars($p['body'])."
            <form action='news.php?username=$username&postid=".$p['id']."' method='post'>
                <input type='submit' name='unlike' value='Unlike'>
                <span>".$p['likes']." likes</span>
            </form>

            <form action='news.php?username=$username&postid=".$p['id']."' method='post'>
            <textarea name='commentbody' rows='3' cols='50'></textarea>
            <input type='submit' name='comment' value='Comment'>
            </form>
            <hr /></br />
            "; 
            Comment::displayComments($p['id']);
            echo "
           
            ";
    } 
}


?>


    <body>

    <br> 
    <br> 

    <div class="postNews">
        <div class="forms">
            <form action="news.php" method="post">
                <h1> Write a post</h1> 
                <textarea name="postbody" rows="8" cols="80" placeholder="Share your news..." ></textarea><br/>
                <p>Select Category</p>
                        <input type="radio" class="inputRadio" id="retail" name="business" value="retail">
                        <label for="retail">Retail</label><br>
                        <input type="radio" class="inputRadio" id="food" name="business" value="food">
                        <label for="food">Food</label><br>
                        <input type="radio" class="inputRadio" id="entertainment"name="business" value="entertainment">
                        <label for="other">Wellness</label><br>
                        <input type="radio" class="inputRadio" id="entertainment"name="business" value="entertainment">
                        <label for="other">Entertainment</label><br>
                        
               
                <input type="submit" name="post" value="Post">       
            </form> 
    </div> 
</div> 

        <div class="posts"> 
            <?php echo $posts; 
        ?> 

        </div> 

        <div class="footer">
            <img src = "img/bluelogo.png" alt="Phased Logo" width=60px height=60px> 
            <p><strong> This site is not official and is an assignment for a UCF Digital Media course | Copyright 2020 Phased</strong></p>
        </div>


    <br> 
    <br> 

    
    </body>
    </html>