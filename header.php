<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">

    <title><?php echo $pageTitle; ?></title>
</head>
<body>

<!-- 
<a href="index.php" class="logo">
    <img src="assets/logo.svg">
</a> -->

<div class="navigation">
    <a href="index.php"><img src="assets/logo.svg"></a>

    <a href="index">Holiday Houses</a>
    <a href="all_houses">All Houses</a>
    <a href="profile">My profile</a>
    <a href="messenges">Messages</a>
    <a href="login">Login</a>
    <a href="contact">Contact</a>

</div>

<div class="burger-menu burger-menu--closed" >
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
</div>
<div class="header_nav_background"></div>
