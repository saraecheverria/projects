<?php include ("header.php"); 
if (isset($_POST['searchbox'])) {
    $tosearch = explode(" ", $_POST['searchbox']);
    if (count($tosearch) == 1) {
            $tosearch = str_split($tosearch[0], 2);
    }
    $whereclause = "";
    $paramsarray = array(':username'=>'%'.$_POST['searchbox'].'%');
    for ($i = 0; $i < count($tosearch); $i++) {
            $whereclause .= " OR username LIKE :u$i ";
            $paramsarray[":u$i"] = $tosearch[$i];
    }
    $users = DB::query('SELECT users.username FROM users WHERE users.username LIKE :username '.$whereclause.'', $paramsarray);
    print_r($users);

    $whereclause = "";
    $paramsarray = array(':body'=>'%'.$_POST['searchbox'].'%');
    for ($i = 0; $i < count($tosearch); $i++) {
            if ($i % 2) {
            $whereclause .= " OR body LIKE :p$i ";
            $paramsarray[":p$i"] = $tosearch[$i];
            }
    }
    $posts = DB::query('SELECT posts.body FROM posts WHERE posts.body LIKE :body '.$whereclause.'', $paramsarray);
    echo '';
    print_r($posts);
    echo '';
}



?> 


    <body>
        

    <div class="searchForms"> 
            <h1>SEARCH</h1> 
            <br><br>
            <form action="" method="post">
                <div class="searchBar">
                    <input type="text" name="searchbox" class="searchInput" placeholder="Search . . .">
                    <button type="submit" name="submit" class="searchButton"><img src="img/Search-icon.svg" class="searchIcons"></button>
                </div>
            </form>
        </div>

    </div>

    <div class="footer">
            <img src = "img/bluelogo.png" alt="Phased Logo" width=60px height=60px> 
            <p><strong> This site is not official and is an assignment for a UCF Digital Media course | Copyright 2020 Phased</strong></p>
        </div>



    </body>
    </html>