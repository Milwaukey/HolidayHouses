<?php $pageTitle = 'Holiday Houses'; $active = 'index'; require_once(__DIR__ . '/header.php'); ?>



<section id="hero">

<div class="hero_tagline">
    <div>Find the perfect</div>
    <div>holiday house</div>
    <h1>today</h1>
</div>

<div class="overlay"></div>
<img src="images/hero_image.jpg">

</section>

    
    <div id="searchBox">
        <form id="frmSearchBox">
            <input type="text" placeholder="Location">
            <input class="datepicker" type="text" placeholder="Start date for holiday">
            <input type="text" placeholder="Bedrooms">

            <button class="btnSearch">SEARCH</button>
        </form>
    </div>




<div id="allHousesContainer">

      <div class="card">
        <?php if($_SESSION){ echo ' <div class="like_house"><i class="material-icons">favorite_border</i></div>'; } ?>
        <div class="card-image">
          <img src="images/hero_image.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="detail-view">This is a link</a>
        </div>
      </div>

</div>


<?php $linkToscript = '<script src="js/index.js"></script>'; require_once(__DIR__ . '/footer.php'); ?>
