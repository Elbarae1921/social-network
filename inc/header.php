<?php

    include("config.php");

    if(!isset($_SESSION['userLoggedIn']))
    {
        header("Location: login.php");
    } 

    include("func.php");

    if(mysqli_connect_errno())
    {
        echo "Failed to connect" + mysqli_connect_errno();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/jQuery.js"></script>
    <title>Social Net</title>
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
    <div class="main">
        <div id="tab">
            <a href="profile.php?id=<?php echo getUserId($_SESSION['userLoggedIn'], $con); ?>" id="logo"><img width="100px" height="100px" src="media/profilepics/<?php echo getUserId($_SESSION['userLoggedIn'], $con); ?>.jpeg" alt="Profile Picture"></a>
            <a href="profile.php?id=<?php echo getUserId($_SESSION['userLoggedIn'], $con); ?>" id="logo"><?php echo $_SESSION['userLoggedIn']; ?></a>
            <!-- <h1 id="logoContainer"><a href="#" id="logo"><img src="logo.png" alt="Logo"></a></h1> -->
            <span class="itemsContainer">
                <a href="newpost.php?id=<?php echo getUserId($_SESSION['userLoggedIn'], $con); ?>" class="sideItem"><span class="insideItem">Add new post</span></a>
            </span>
        </div>