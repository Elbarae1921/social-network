<?php

    include("inc/config.php");
    unset($_SESSION['userLoggedIn']);
    header("Location: login.php");

?>