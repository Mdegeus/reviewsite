<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/templates/defaults/requirements.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/templates/defaults/classes.php";

if (!isset($_POST['register'])) { header('Location: /'); die(); } // if the user is not suposed to be here die and return to home page

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$succes = CreateUser($username, $email, $password);

if ($succes) {
    $userinfo = LoginUser($username, $succes['password']);

    $_SESSION['user'] = $userinfo;

    header('Location: /?succes=true'); 
} else {
    header('Location: /?succes=false'); 
}


die();



