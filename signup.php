<?php $pageTitle = 'Signup'; $active = 'signup'; require_once(__DIR__ . '/header.php'); ?>



<section id="login">

    <div class="signup_container">
        <div class="signup_wrapper">


            <form id="frmSignup" enctype="multipart/form-data">
                <h3>Signup</h3>
                <div class="input-field">
                    <input name="txtUsername" placeholder="MyAwesomeUsername" id="txtUsername" type="text" class="validate">
                    <label for="txtUsername">Username</label>
                </div>
                <div class="input-field">
                    <input name="txtEmail" placeholder="my@email.com" id="txtEmail" type="email" class="validate">
                    <label for="txtEmail">Email</label>
                </div>





                <div class="input_wrapper">
                <div class="input-field">
                    <input name="txtPassword" placeholder="**********" id="txtPassword" type="password" class="validate">
                    <label for="txtPassword">Password</label>
                </div>
                <div class="input-field">
                    <input name="txtConfirmPassword" placeholder="**********" id="txtConfirmPassword" type="password" class="validate">
                    <label for="txtConfirmPassword">Confirm Password</label>
                </div>
                </div>


                <!-- <div class="input-field"> -->
                <!-- <div class="file-field input-field">
                        <div>FILE</div>
                        <input type="file">
                        <input class="file-path" type="text" placeholder="Choose your profile image ...">
                    </div> -->
                <!-- </div> -->
                    



                <div class="input_wrapper">
                <div class="input-field">
                    <input name="txtFirstName" placeholder="Jane" id="txtFirstName" type="text" class="validate">
                    <label for="txtFirstName">First Name</label>
                </div>

                <div class="input-field">
                    <input name="txtLastName" placeholder="Doe" id="txtLastName" type="text" class="validate">
                    <label for="txtLastName">Last Name</label>
                </div>
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
                <a href="login">Already have an account? Login here!</a>
            </form>
        </div>
    </div>

</section>



<?php $linkToscript = '<script src="js/signup.js"></script>'; require_once(__DIR__ . '/footer.php'); ?>
