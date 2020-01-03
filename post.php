<?php

    include("header.php");

    if(isset($_GET['id']))
    {
        $postId = $_GET['id'];
    }
    else {
        header("Location: index.php");
    }

    $query = mysqli_query($con, "SELECT * FROM posts WHERE id = '$postId'");

    // $title = mysqli_fetch_array($query)['title'];
    // $post = mysqli_fetch_array($query)['post'];
    // $writer = mysqli_fetch_array($query)['writer'];
    // $likes = mysqli_fetch_array($query)['likes'];

    $title = array(); $post = array(); $writer = array(); $likes = array(); $ids = array();

    while($row = mysqli_fetch_array($query))
    {
        array_push($ids, $row['id']);
        array_push($title, $row['title']);
        array_push($post, $row['post']);
        array_push($writer, $row['writer']);
        array_push($likes, $row['likes']);
    }

?>

<script src="script/post.js" defer></script>
<div id="articleContainer">
            <?php
                echo "
                    <div class='article'>
                        <div class='title'>". $title[0] ."</div>
                        <hr>
                        <div class='post'>". $post[0] ."</div>
                        <hr>
                        <div class='rates'>
                        <span class='stuff'><button class='like btn' id='". $ids[0] ."' title='Like'><img src='assets/like.png' alt='Like'></button><span>". $likes[0] ."</span></span>
                            <span class='stuff'><button class='comment btn' title='Comment'><img src='assets/comment.png' alt='Comment'></button><span>13</span></span>
                            <span class='stuff'><button class='share btn' title='Share'><img src='assets/share.png' alt='Share'></button></span>
                            <span class='writer'>User : <a href='profile.php?id=". $writer[0] ."'>". getUser($writer[0], $con) ."</a></span>
                        </div>
                    </div>
                    
                    ";
            ?>
        </div>
        <style>
            .title:hover {
                color: white;
            }
            .article:hover {
                box-shadow: none;
            }
        </style>
    </div>
</body>
</html>