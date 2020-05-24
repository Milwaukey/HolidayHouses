<?php $pageTitle = 'Signup'; $active = 'signup'; require_once(__DIR__ . '/header.php'); ?>



<section id="login">

    <div class="signup_container">
        <div class="signup_wrapper">


            <form id="frmCreateHouse">
                <h3>create House</h3>


                <div class="input-field">
                    <input name="txtStreetName" placeholder="Street Name" id="txtStreetName" type="text" class="validate">
                    <label for="txtStreetName">Street Name</label>
                </div>
                <div class="input-field">
                    <input name="txtStreetNumber" placeholder="street number" id="txtStreetNumber" type="text" class="validate">
                    <label for="txtStreetNumber">Street Number</label>
                </div>
                <div class="input-field">
                    <input name="txtZip" placeholder="Zip" id="txtZip" type="text" class="validate">
                    <label for="txtZip">Zip</label>
                </div>
                <div class="input-field">
                    <input name="txtCity" placeholder="City Name" id="txtCity" type="text" class="validate">
                    <label for="txtCity">City Name</label>
                </div>
                <div class="input-field">
                    <input name="txtLon" placeholder="your house longtituge coordinate" id="txtLon" type="text" class="validate">
                    <label for="txtLon">Longtitude</label>
                </div>
                <div class="input-field">
                    <input name="txtLat" placeholder="" id="txtLat" type="text" class="validate">
                    <label for="txtLat">langtitude</label>
                </div>


                <div class="input-field">
                    <input name="boolPool" placeholder="Pool" id="boolPool" type="checkbox" class="validate">
                    <label for="boolPool">Pool</label>
                </div>
                <div class="input-field">
                    <input name="boolPets" placeholder="Pets" id="boolPets" type="checkbox" class="validate">
                    <label for="boolPets">Pets</label>
                </div>
                <div class="input-field">
                    <input name="intPoolsize" placeholder="Pool size" id="intPoolsize" type="text" class="validate">
                    <label for="intPoolsize">Pool size</label>
                </div>
                <div class="input-field">
                    <input name="inBathrooms" placeholder="Number of Bathrooms" id="inBathrooms" type="text" class="validate">
                    <label for="inBathrooms">Bathrooms</label>
                </div>
                <div class="input-field">
                    <input name="intBedrooms" placeholder="Bedrooms" id="intBedrooms" type="text" class="validate">
                    <label for="intBedrooms">Bedrooms</label>
                </div>


                <div class="input-field">
                    <input name="txtTitle" placeholder="Title" id="txtTitle" type="text" class="validate">
                    <label for="txtTitle">Title</label>
                </div>
                <div class="input-field">
                    <input name="intArea" placeholder="Size" id="intArea" type="text" class="validate">
                    <label for="intArea">Size</label>
                </div>
                <div class="input-field">
                    <input name="txtDescription" placeholder="Description" id="txtDescription" type="text" class="validate">
                    <label for="txtDescription">Description</label>
                </div>
                <div class="input-field">
                    <input name="intHouseTypeID" placeholder="House Type" id="intHouseTypeID" type="text" class="validate">
                    <label for="intHouseTypeID">House Type</label>
                </div>


                <div class="input-field">
                    <input name="intUserID" placeholder="intUserID" id="intUserID" type="text" class="validate">
                    <label for="intUserID">User ID</label>
                </div> 



                <button class="btnSubmit">Submit</button>
                <a href="login">Already have an account? Login here!</a>
            </form>
        </div>
    </div>

</section>



<?php $linkToscript = '<script src="js/createHouse.js"></script>'; require_once(__DIR__ . '/footer.php'); ?>
