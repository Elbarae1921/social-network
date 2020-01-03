<?php

include("inc/config.php");

$query = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='roadrollerda@gmail.com' AND `password`='diopassword'");

echo mysqli_fetch_array($query)['email'];

?>