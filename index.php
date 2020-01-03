<?php

    include("header.php");

    $query = mysqli_query($con, "SELECT * FROM posts");

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

<script src="script/index.js" defer></script>
<div id="articleContainer">
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

</html>