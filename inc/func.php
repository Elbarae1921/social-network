<?php 

function SanitizeName($input) {
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    $input = ucfirst(strtolower($input));
    return $input;
}
function SanitizeCin($input) {
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    $input = strtoupper($input);
    return $input;
}
function SanitizeEmail($input) {
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    $input = strtolower($input);
    return $input;
}
function SanitizePassword($input) {
    $input = strip_tags($input);
    return $input;
}

function getUser($id, $con) {
    return mysqli_fetch_array(mysqli_query($con, "SELECT `username` FROM `users` WHERE `id` ='$id'"))['username'];
}

function getUserId($username, $con) {
    return mysqli_fetch_array(mysqli_query($con, "SELECT `id` FROM `users` WHERE `username` ='$username'"))['id'];
}

function getUserEmail($username, $con) {
    return mysqli_fetch_array(mysqli_query($con, "SELECT `email` FROM `users` WHERE `username` ='$username'"))['email'];
}

function getDescription($username, $con) {
    return mysqli_fetch_array(mysqli_query($con, "SELECT `description` FROM `users` WHERE `username` ='$username'"))['description'];
}

?>