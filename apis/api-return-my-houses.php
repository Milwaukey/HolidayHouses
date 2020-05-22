<?php

// require_once(__DIR__ . '/../includes/connection.php'); 
require_once(__DIR__ . '/functions.php'); 

//start the session if needed
// session_start();

// if(!$_SESSION){
//     //Keep people out of sites they don't belong in
//     header('Location: ../login.php ');
//     exit; // Make sure that code doesn't keeep running and deletes people!! 
     
// }

//THIS IS EXECUTION OF PDO - create the sequence to be prepared
$tUserID = $_POST['txtUserID'];


$query = 'SELECT * FROM houses WHERE userID = ?';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tUserID]);

    
echo sendResponse(1, 'SUCCES!', __LINE__);
