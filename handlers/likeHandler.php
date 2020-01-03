<?php

    include("../inc/config.php");

    if(isset($_POST['postId']))
    {
        $postId = $_POST['postId'];

        mysqli_query($con, "UPDATE posts SET likes = likes + 1 WHERE id = '$postId'");

        $query = mysqli_query($con, "SELECT likes FROM posts WHERE id = '$postId'");

        echo mysqli_fetch_array($query)['likes'];
    }
    else
    {
        header("Location: ../index.php");
    }

?>