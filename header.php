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

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title><?php echo $pageTitle; ?></title>
</head>
<body> 


<a href="index.php" class="logo">
    <?php if($active == 'index' ){echo '<img src="assets/logo_white.svg">';}else{ echo '<img src="assets/logo_black.svg">';} ?>
</a>

<div class="navigation">
    <a href="index.php"><img src="assets/logo_black.svg"></a>

    <a <?php if($active == 'profile' || $active == 'booking'){echo 'style="color: black;"';} ?> href="index">Holiday Houses</a>

    <?php if($_SESSION){ ?>

        <a <?php if($active == 'profile' || $active == 'booking'){echo 'style="color: black;"';} ?> href="profile">My profile</a>
        <a <?php if($active == 'profile' || $active == 'booking'){echo 'style="color: black;"';} ?> href="messenges">Messages</a>
        <a <?php if($active == 'profile' || $active == 'booking'){echo 'style="color: black;"';} ?> href="apis/logout">Logout</a>

   <?php } ?>

   <?php if(!$_SESSION){ ?>

        <a <?php if($active == 'profile' || $active == 'booking'){echo 'style="color: black;"';} ?> href="login">Login</a>

   <?php } ?>
   
        <a <?php if($active == 'profile' || $active == 'booking'){echo 'style="color: black;"';} ?>href="contact">Contact</a>

</div>

<div class="burger-menu burger-menu--closed" >
            <div class="bar <?php if($active=='index' || $active == 'detail-view' ){echo 'indexBurerMenu';}?>"></div>
            <div class="bar <?php if($active=='index' || $active == 'detail-view' ){echo 'indexBurerMenu';}?>"></div>
            <div class="bar <?php if($active=='index' || $active == 'detail-view' ){echo 'indexBurerMenu';}?>"></div>
</div>
<div <?php if($active == 'index'){echo 'style="background: black; opacity: 0.2;"'; }elseif($active == 'profile'){echo 'style="background: #f9f9f9;"'; } ?> class="header_nav_background"></div>
