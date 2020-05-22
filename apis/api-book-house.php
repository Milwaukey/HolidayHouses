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

$tFromDate      = $_POST['txtFromDate'];
$tToDate        = $_POST['txtToDate'];
$tUserID        = $_POST['txtUserID'];
$tHouseID       = $_POST['txtHouseID'];
$iPeoplecount   = $_POST['intPeopleCount'];

//validate dates
if(empty($tFromDate)) {echo sendResponse(1, 'No from date selected', __LINE__);}
if(empty($tToDate)) {echo sendResponse(1, 'No to date selected', __LINE__);}
if(empty($iPeoplecount)) {echo sendResponse(1, 'No value given to people count', __LINE__);}
if($iPeoplecount < 1 ){  echo sendResponse(1, 'There must be atleast one person to book', __LINE__);}
if($tFromDate > $tToDate ){    echo sendResponse(1, 'fromd ate must be before to date', __LINE__);}


//THIS IS EXECUTION OF PDO - create the sequence to be prepared
$query ='INSERT INTO bookings (fromDate,toDate,peopleCount,houseID,userIDbooking)
    VALUES (?,?,?,?,?)';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tFromDate,$tToDate,$iPeoplecount,$tHouseID,$tUserID]);

echo sendResponse(1, 'SUCCES!', __LINE__);
