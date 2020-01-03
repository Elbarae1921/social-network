<?php 

    include("../inc/config.php");
    include("../inc/func.php");

    if(!isset($_POST['val']))
    {
        header("Location: ../index.php");
    }
    else
    {
        $val = $_POST['val'];

        $query = mysqli_query($con, "SELECT id, title, post, likes, writer FROM posts WHERE title like '%$val%' or post like '%$val%' or genre like '%$val%' or (SELECT username FROM users WHERE id = writer) like '%$val%'");

        $ids = array();        
        $titles = array();        
        $posts = array();        
        $likes = array();        
        $writers = array();    
        
        while($row = mysqli_fetch_array($query))
        {
            array_push($ids, $row['id']);
            array_push($titles, $row['title']);
            array_push($posts, $row['post']);
            array_push($likes, $row['likes']);
            array_push($writers, $row['writer']);
        }

        if(sizeof($ids) != 0)
        {
            $results = "";
            $i = 0;
            foreach($ids as $id)
            {
                $results = $results . "<div class='article'>
                    <div class='title'><a href='post.php?id=$id' class='postLink'>". $titles[$i] ."</a></div>
                    <hr>
                    <div class='post'>". substr($posts[$i], 0, 444) . "..." ."<a href='post.php?id=$id'> Read More.</a></div>
                    <hr>
                    <div class='rates'>
                        <span class='stuff'><button class='like btn' id='". $id ."' title='Like'><img src='assets/like.png' alt='Like'></button><span>". $likes[$i] ."</span></span>
                        <span class='stuff'><button class='comment btn' title='Comment'><img src='assets/comment.png' alt='Comment'></button><span>13</span></span>
                        <span class='stuff'><button class='share btn' title='Share'><img src='assets/share.png' alt='Share'></button></span>
                        <span class='writer'>User : <a href='#'>". getUser($writers[$i], $con) ."</a></span>
                    </div>
                    </div>";
                $i++;
            }
            echo $results;
        }
        else
        {
            echo "<p class='naught'>No results.</p>";
        }
    }

?>