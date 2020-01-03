<?php

    include("inc/config.php");

    if(!isset($_SESSION['userLoggedIn']))
    {
        header("Location: login.php");
    } 
    
    include("inc/func.php");

    if(isset($_GET['id']))
    {
        $userId = $_GET['id'];
        $username = getUser($_GET['id'], $con);
        $email = getUserEmail($username, $con);
    }


    if(mysqli_connect_errno())
    {
        echo "Failed to connect" + mysqli_connect_errno();
    }    

    $query = mysqli_query($con, "SELECT * FROM posts WHERE `writer` = '$userId'");

    $ids = array(); $titles = array(); $posts = array(); $writers = array(); $likes = array();

    while($row = mysqli_fetch_array($query))
    {
        array_push($ids, $row['id']);
        array_push($titles, $row['title']);
        array_push($posts, $row['post']);
        array_push($writers, $row['writer']);
        array_push($likes, $row['likes']);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/jQuery.js"></script>
    <script src="script/profile.js" defer></script>
    <title><?php echo $username ?></title>
</head>
<body>
    <div class="navbar">
        <h1><a href="index.php" id="header">Social Net</a></h1>
        <div class="items">
            <ul>
                <li><a href="index.php" class="elements">Home</a></li>
                <li><a href="#" class="elements">adipiscing</a></li>
                <li><a href="#" class="elements">elit</a></li>
                <li><a href="logout.php" class="elements">Logout</a></li>
            </ul>
        </div>
        <!-- <div id="account">
            <a href="#" id="login">Login</a>
            <a href="#" id="register">Register</a>
        </div> -->
    </div>
    <div class="container">
        <div id="banner">
            <img src="media/profilepics/<?php echo getUserId($username, $con); ?>.jpeg" alt="Profile Picture" width="200px" height="200px">
            <div>
                <h1><?php echo $username; ?></h1>
                <p><?php echo $email; ?></p>
                <p></p>
            </div>        
        </div>
        <div id="articles">
            <div id="search">
                <input type="submit" value="Search" class="submitInput" id="searchButton">
            </div>
            <?php
            $i = 0;
            foreach($titles as $title)
            {
                echo "
                    <div class='article'>
                        <div class='title'><a href='post.php?id=$ids[$i]' class='postLink'>". $title ."</a></div>
                        <hr>
                        <div class='post'>". substr($posts[$i], 0, 444) . "..." ."<a href='post.php?id=$ids[$i]'> Read More.</a></div>
                        <hr>
                        <div class='rates'>
                            <span class='stuff'><button class='like btn' id='". $ids[$i] ."' title='Like'><img src='assets/like.png' alt='Like'></button><span>". $likes[$i] ."</span></span>
                            <span class='stuff'><button class='comment btn' title='Comment'><img src='assets/comment.png' alt='Comment'></button><span>13</span></span>
                            <span class='stuff'><button class='share btn' title='Share'><img src='assets/share.png' alt='Share'></button></span>
                            <span class='writer'>User : <a href='profile.php?id=". $writers[$i] ."'>". getUser($writers[$i], $con) ."</a></span>
                        </div>
                    </div>
                ";
                $i++;
            }
            ?>
        </div>
    </div>
    <div id="searchContainer">
        <input type="text" id="searchBox">
        <div id="resultsContainer">
            
        </div>
    </div>
</body>
