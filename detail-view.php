<?php $pageTitle = 'Login'; $active = 'detail-view'; require_once(__DIR__ . '/header.php'); ?>


<section id="detail_view">

    <div class="slideShow">
        


    <div class="slide_item">
        <div class="slide_content">
            <div class="overlay"></div>
            <img src="images/hero_image.jpg">
        </div>
    </div>

    <div class="slide_item">
        <div class="slide_content">
            <div class="overlay"></div>
            <img src="images/login.jpg">
        </div>
    </div>


    <div id="dots_wrapper" class="dots_style">
        <div class="dot_nagvigation"></div>
        <div class="dot_nagvigation"></div>
    </div>

    </div>


<div class="houseInfo">

    <h4>HOUSE TITLE</h4>
    <hr>

    <div class="houseScrollInfo">
        <div class="locationPerson">
            <div><i class="material-icons">place</i>LOCATION</div>
            <div><i class="material-icons">perm_identity</i> <a href="">NAME OF PERSON</a></div>
        </div>

        <div class="houseDescription">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        </div>


        <div class="desktop_view">

        <div class="facilityWrapper">
        <div class="facilities">
            <div><i class="material-icons">local_hotel</i><p>X Bedrooms</p></div>
            <div><i class="material-icons">layers</i><p>X kvm</p></div>
            <div><i class="material-icons">bathtub</i><p>X Bathrooms</p></div>
            <div><i class="material-icons">pool</i><p>Pool</p></div>
        </div>
        </div>

        <div class="bookNow">
            $ 300 / DAY
            <div class="bntBook"><a href="book-now">Book Now</a></div>
        </div>
        </div>
    </div>

</div>


</section>


<?php $linkToscript = '<script src="js/detail_view.js"></script>'; require_once(__DIR__ . '/footer.php'); ?>
