<?php
// require_once(__DIR__ . '/../includes/connection.php'); 
require_once(__DIR__ . '/functions.php'); 




//Variable associated with a house
$iUserID        = $_POST['intUserID'];    //kommer fra session
$tTitle         = $_POST['txtTitle'];
$iArea          = $_POST['intArea'];
$tDescription   = $_POST['txtDescription'];

$iHouseTypeID   = $_POST['intHouseTypeID'];//kommer fra klienten

//Title validation
if(empty($tTitle)){ echo sendResponse(1, 'No title given', __LINE__);}
if(strlen($tTitle) > 30 ){ echo sendResponse(1, 'First name name to long', __LINE__);}
if(strlen($tTitle) < 1 ){ echo sendResponse(1, 'First name to short', __LINE__);}

//Area Validation
if(empty($iArea)){ echo sendResponse(1, 'No area given', __LINE__);}
if(is_int($iArea)){ echo sendResponse(1, 'Must be a numerical value', __LINE__);}
if(strlen($iArea) < 1 ){ echo sendResponse(1, 'your house must be more than 1 square meter', __LINE__);}

//description validation
if(empty($tDescription)) { echo sendResponse(1, 'No title given', __LINE__);}
if(strlen($tDescription) > 499 ){ echo sendResponse(1, 'First name name to long', __LINE__);}
if(strlen($tDescription) < 1 ){ echo sendResponse(1, 'First name to short', __LINE__);}


//facility validation
//variable associated with facilities
$bPool          = $_POST['boolPool'];
$bPets          = $_POST['boolPets'];
$iPoolsize      = $_POST['intPoolSize'];
$iBedrooms      = $_POST['intBedrooms'];
$iBathrooms     = $_POST['intBathrooms'];

//bedroom validation
if($iBedrooms < 1) { echo sendResponse(1, 'you must have atleast one bedroom', __LINE__);}
//bathroom valdation
if($iBathrooms < 1) { echo sendResponse(1, 'you must have atleast one bathroom', __LINE__);}
//pool validation
if(($bPool == true) || ($bPool == 1) && ($iPoolsize < 1)) { echo sendResponse(1, 'your pool must have a size', __LINE__);}






// //adress validation
// //variable associated with adressess
$tStreetname    = $_POST['txtStreetName'];
$tStreetnumber  = $_POST['txtStreetNumber'];
$tZip           = $_POST['txtZip'];
$tCity          = $_POST['txtCity'];
$tLon           = $_POST['txtLon'];
$tLat           = $_POST['txtLat'];

if(empty($tStreetname)) { echo sendResponse(1, 'No streetname given', __LINE__);}
if(empty($tStreetnumber)) { echo sendResponse(1, 'No streetnumber given', __LINE__);}
if(empty($tZip)) { echo sendResponse(1, 'No zip given', __LINE__);}
if(empty($tCity)) { echo sendResponse(1, 'No city given', __LINE__);}
if(empty($tLon)) { echo sendResponse(1, 'No longtitude Given', __LINE__);}
if(empty($tLat)) { echo sendResponse(1, 'No langtitude given', __LINE__);}


//Insert information into the database - Create the facilties and return the ID
$query ='INSERT INTO facilities (pool, poolSize, bedrooms, bathrooms, pets) 
        VALUES (?,?,?,?,?)';

$stmt = $db->prepare($query);
$ok = $stmt->execute([$bPool,$iPoolsize,$iBedrooms,$iBathrooms,$bPets]);

//save the ID of the newly creted facilties to be used when creating the house
$iFacilityID    = $db->lastInsertId();


$query ='INSERT INTO houseAdress (streetname, streetnumber, zipcode, city, lon, lat) VALUES (?,?,?,?,?,?)';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tStreetname, $tStreetnumber, $tZip, $tCity, $tLon, $tLat ]);

//save the ID of the newly creted adress to be used when creating the house
$iAdressID    = $db->lastInsertId();



//Put the house into the database
$query ='INSERT INTO houses ( userID, houseTypeID, title, description, area, facilityID, adressID)VALUES (?,?,?,?,?,?,?)';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$iUserID, $iHouseTypeID, $tTitle, $tDescription,$iArea ,$iFacilityID, $iAdressID]);

echo sendResponse(1, 'SUCCES!', __LINE__);

