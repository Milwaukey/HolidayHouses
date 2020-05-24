<?php

require_once(__DIR__ . '/connection.php'); 
require_once(__DIR__ . '/functions.php'); 


session_start();


//PASSWORDS SHOULD BE HASHED BUT WE DIDNT FOR TESTING PURPOSES
//THIS IS EXECUTION OF PDO - create the sequence to be prepared
$tUsername  = $_POST['txtUsername'];
$tEmail     = $_POST['txtEmail'];
$tPassword  = $_POST['txtPassword'];
$tFName     = $_POST['txtFirstName'];
$tLName     = $_POST['txtLastName'];


//first name validation
if(empty($tFName)) {echo sendResponse(1, 'No first name given', __LINE__);}
if(strlen($tFName) > 51 ){  echo sendResponse(1, 'First name name to long', __LINE__);}
if(strlen($tFName) < 1 ){    echo sendResponse(1, 'First name to short', __LINE__);}


//lastname validation
if(empty($tLName)) {echo sendResponse(1, 'No last name given', __LINE__);}
if(strlen($tLName) > 51 ){  echo sendResponse(1, 'Last name to long', __LINE__);}
if(strlen($tLName) < 1 ){    echo sendResponse(1, 'Last name to short', __LINE__);}

//password validation
if(empty($tPassword)) {echo sendResponse(1, 'No password given', __LINE__);}
if(strlen($tPassword) > 101 ){  echo sendResponse(1, 'password to long', __LINE__);}
if(strlen($tPassword) < 6 ){    echo sendResponse(1, 'password to short', __LINE__);}


//username validation
if(empty($tUsername)) {echo sendResponse(1, 'No username given', __LINE__);}
if(strlen($tUsername) > 51 ){  echo sendResponse(1, 'Username to long', __LINE__);}
if(strlen($tUsername) < 1 ){  echo sendResponse(1, 'Username to short', __LINE__);}


$query ='SELECT username FROM users WHERE username = ?';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tUsername]);
if($stmt->rowCount() >= 1){ echo sendResponse(1, 'Username already exists', __LINE__);}



//email validation
if(empty($tEmail)) {echo sendResponse(1, 'No email given', __LINE__);}
if(strlen($tEmail) > 51 ){  echo sendResponse(1, 'Email to long', __LINE__);}
if(strlen($tEmail) < 1 ){    echo sendResponse(1, 'Email to short', __LINE__);}
if(!filter_var($tEmail, FILTER_VALIDATE_EMAIL)) {echo sendResponse(1, "$email is not a valid email address", __LINE__);}


$query ='SELECT email FROM users WHERE email = ?';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tEmail]);
if($stmt->rowCount() >= 1){ echo sendResponse(1, 'Email already exists', __LINE__);}




//image
$sExtension = "." . pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION) ;
$tImage = uniqid() . $sExtension;


$image_name = $_FILES['image']['name'];
$target_file = "../profileImages/$tImage";
$targetFileForItem = "profileImages/$tImage";

move_uploaded_file($_FILES['image']['tmp_name'], $target_file);









$query ='INSERT INTO users (username, email, password, firstname, lastname,profileImage) VALUES (?,?,?,?,?,?)';
$stmt = $db->prepare($query);
$ok = $stmt->execute([$tUsername,$tEmail,$tPassword,$tFName,$tLName,$tImage]);

$userIDreturned =  $db->LastInsertId();


$_SESSION['userID'] = $userIDreturned; 

$db = null;
echo sendResponse(1, 'SUCCES!', __LINE__);
