<?php $pageTitle = 'Login'; $active = 'login'; require_once(__DIR__ . '/header.php'); require_once(__DIR__ . '/apis/connection.php'); require_once(__DIR__ . '/apis/functions.php');?>



<?php

if($_POST){

    $tUsername  = $_POST['txtUsername'];
    $tPassword  = $_POST['txtPassword'];
    
    //username validation
    if(empty($tUsername)) {echo sendResponse(1, 'No username given', __LINE__);}
    if(strlen($tUsername) > 51 ){  echo sendResponse(1, 'Username to long', __LINE__);}
    if(strlen($tUsername) < 1 ){  echo sendResponse(1, 'Username to short', __LINE__);}


    $query ='SELECT username FROM users WHERE username = ?';
    $stmt = $db->prepare($query);
    $ok = $stmt->execute([$tUsername]);
    if($stmt->rowCount() != 1){ echo sendResponse(1, 'Wrong Credentials!', __LINE__);}


    //password validation
    if(empty($tPassword)) {echo sendResponse(1, 'No password given', __LINE__);}
    if(strlen($tPassword) > 101 ){  echo sendResponse(1, 'password to long', __LINE__);}
    if(strlen($tPassword) < 6 ){    echo sendResponse(1, 'password to short', __LINE__);}


    // CHECK FOR PASSWORD EXSIST 
    $query ='SELECT userID, password FROM users WHERE password = ? AND username = ?';
    $stmt = $db->prepare($query);
    $ok = $stmt->execute([$tPassword, $tUsername]);
    if($stmt->rowCount() != 1){ echo sendResponse(1, 'Wrong Credentials!', __LINE__);}

    while($row = $stmt->fetch()){

         $_SESSION['userID'] = $row['userID'];

         header('Location: profile');
    
    };

}


?>



<section id="login">

    <div class="login_container">
        <div class="login_wrapper">
            <form method="POST" action="login.php">
                <h3>Login</h3>
                <div class="input-field">
                    <input name="txtUsername" placeholder="MyAwesomeUsername" id="txtUsername" type="text" class="validate">
                    <label for="txtUsername">Username</label>
                </div>
                <div class="input-field">
                    <input name="txtPassword" placeholder="**********" id="txtPassword" type="password" class="validate">
                    <label for="txtPassword">Password</label>
                </div>
                <button class="btnSubmit">Submit</button>
                <a href="signup">Don’t have an account - signup here!</a>
            </form>
        </div>
    </div>

</section>



<?php require_once(__DIR__ . '/footer.php'); ?>
