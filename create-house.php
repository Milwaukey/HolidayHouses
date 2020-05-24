<?php $pageTitle = 'createHouse'; $active = 'signup'; require_once(__DIR__ . '/header.php'); ?>



<section id="login">

    <div class="signup_container">
        <div class="signup_wrapper">


            <form id="frmCreateHouse" enctype="multipart/form-data">
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


                <p>
                    <label for="boolPool">
                    <input name="boolPool" placeholder="Pool" id="boolPool" type="checkbox" class="validate">
                        <span>pool</span>
                    </label>
                </p>
                <p>
                    <label for="boolPets">
                    <input name="boolPets" placeholder="Pets" id="boolPets" type="checkbox" class="validate">
                        <span>pets Allowed</span>
                    </label>
                </p>
                <br>
                <div class="input-field">
                    <input name="intPoolSize" placeholder="Pool size" id="intPoolSize" type="text" class="validate">
                    <label for="intPoolSize">Pool size</label>
                </div>
                <div class="input-field">
                    <input name="intBathrooms" placeholder="Number of Bathrooms" id="intBathrooms" type="text" class="validate">
                    <label for="intBathrooms">Bathrooms</label>
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



                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input name="image" class="file-path validate" type="text">
                    </div>
                </div>


                <button class="btnSubmit">Submit</button>
            </form>
        </div>
    </div>

</section>



<?php $linkToscript = '<script src="js/createHouse.js"></script>'; require_once(__DIR__ . '/footer.php'); ?>
