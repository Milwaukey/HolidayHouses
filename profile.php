<?php $pageTitle = 'Login'; $active = 'profile'; require_once(__DIR__ . '/header.php'); if(!$_SESSION){ header('Location: login'); }; require_once(__DIR__ . '/header.php'); require_once(__DIR__ . '/apis/connection.php'); require_once(__DIR__ . '/apis/functions.php');?>


<?php 

if($_GET){   $visitUserID = $_GET['id'];    ?>



<section id="profile_header">
    <div class="profile_info_wrapper">
        <div class="profile_image">
            <img src="images/login.jpg">
        </div>
        <div class="profile_info">
            <h4>Username</h4>
            <p>Name</p>
            <p>Email</p>
            <p>City</p>
            <p class="followers">200 FOLLOWERS</p>
        </div>
    </div>
</section>


  















<?php }else{

  
?>


<section id="profile_header">
<?php

  $userID = $_SESSION['userID'];

    // CHECK FOR PASSWORD EXSIST 
    $query ='SELECT userID, username, email, firstname, lastname FROM users WHERE userID = ?';
    $stmt = $db->prepare($query);
    $ok = $stmt->execute([$userID]);

    while($row = $stmt->fetch()){

         echo '
            <div class="profile_info_wrapper">
            <div class="profile_image">
                <img src="images/login.jpg">
            </div>
            <div class="profile_info">
                <h4>'.$row['username'].'</h4>
                <p>'.$row['firstname'].' '. $row['lastname'].'</p>
                <p>'.$row['email'].'</p>
                <p>City</p>
                <p class="followers">200 FOLLOWERS</p>
            </div>
            </div>
          ';
    
    };


?>
</section>

<section id="profile_container">


<!-- VISINTING YOUR OWN PROFILE  -->
<div class="profile_tabs">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">LIKES</a></li>
        <li class="tab"><a href="#test5">FOLLOWEES</a></li>
        <li class="tab"><a href="#test6">HOUSES</a></li>
        <li class="tab"><a class="active" href="#test7">BOOKINGS</a></li>
      </ul>
    </div>

    <div class="card-content profile_card">
      <div id="test4" class="profile_card_container">


      <div class="card">
          <div class="like_house"><i class="material-icons">favorite_border</i></div>
        <div class="card-image">
          <img src="images/hero_image.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>


      </div>
      <div id="test5" class="profile_card_container">

      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s3">
              <img src="images/firkant.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
              </span>
            </div>
          </div>
        </div>
      </div>


      </div>
      <div id="test6" class="profile_card_container">

    
      <div id="linkHouse" class="card grey darken-3 newHouseCard" style="cursor: pointer;">
        <div class="card-content white-text center-align centerVerticalAlign">
          <h5>Create</h5>
          <p>NEW HOUSE</p>
        </div>
      </div>


      <div class="card">
        <div class="delete_house"><i class="material-icons">delete_forever</i></div>
        <div class="card-image">
          <img src="images/hero_image.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Edit House</a>
        </div>
      </div>

      </div>
      <div id="test7" class="">


      <table class="striped highlight centered">
        <thead>
          <tr>
              <th>BOOKING ID</th>
              <th>DATE</th>
              <th>PRICE</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>

      </div>
    </div>
</div>



<?php 
}
?>


<!-- VISITING ANOTHER PROFILE TO FOLLOW ECT. -->
<!-- <div class="profile_tabs">


    <div class="tabs_visit_profile">

            <div class="tabActive">HOUSES</div>
            <div>FOLLOW</div>
            <div>MESSAGE</div>
    </div>

    <div class="card-content profile_card">
    </div>
</div> -->
</section>



<?php require_once(__DIR__ . '/footer.php'); ?>
