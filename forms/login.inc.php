<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/templates/defaults/requirements.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/templates/defaults/classes.php";

if (!isset($_POST['login'])) { header('Location: /'); die(); } // if the user is not suposed to be here die and return to home page

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$userinfo = LoginUser($username, $password);

$_SESSION['user'] = $userinfo;

header('Location: /'); 

die();