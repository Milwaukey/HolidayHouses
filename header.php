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
    <link rel="stylesheet" href="css/materialize.css.css">

    <title><?php echo $pageTitle; ?></title>
</head>
<body>

<!-- 
<a href="index.php" class="logo">
    <img src="assets/logo.svg">
</a> -->

<nav>
    <a href="index.php"><img src="assets/logo.svg"></a>

    <?php if( !$_SESSION ){ echo '<a href="login.php">Holiday Houses</a>'; }?>
    <?php if( !$_SESSION ){ echo '<a href="login.php">All Houses</a>'; }?>
    <?php if( !$_SESSION ){ echo '<a href="login.php">Contact</a>'; }?>
    <?php if( !$_SESSION ){ echo '<a href="login.php">Login</a>'; }?>

    <?php if( $_SESSION ){ echo '<a href="profile.php">Profile</a>'; }?>
    <?php if( $_SESSION ){ echo '<a href="profile.php">Messages</a>'; }?>
</nav>

<div class="burger-menu burger-menu--closed" >
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
</div>
<div class="header_nav_background"></div>
