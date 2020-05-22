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
$tUserID        = $_POST['txtUserID'];
$ttHouseID      = $_POST['txtHouseID'];


$query ='SELECT * FROM likes WHERE userID = ? AND HouseID = ?';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tUserID, $ttHouseID]);

   
if($ok){

    $query ='DELETE FROM likes WHERE userFollowerID = ? AND usertHouseID = ?';
    $stmt = $db->prepare($query);
    $ok = $stmt->execute([$tUserID, $ttHouseID]);
    echo sendResponse(1, 'Unfollow SUCCES!', __LINE__);

}else{

    $query ='INSERT INTO likes (userrID, houseID)
     VALUES (?, ?)';
    $stmt = $db->prepare($query);
    $ok = $stmt->execute([$tUserID, $ttHouseID]);
    echo sendResponse(1, 'like SUCCES!', __LINE__);

}



echo sendResponse(1, 'SUCCES!', __LINE__);
