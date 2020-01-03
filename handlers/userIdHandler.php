<?php

    include("../inc/config.php");
    include("../inc/func.php");
    if(isset($_SESSION['userLoggedIn']))
        echo getUserId($_SESSION['userLoggedIn'], $con);
    else
        header("Location: ../login.php");
?>