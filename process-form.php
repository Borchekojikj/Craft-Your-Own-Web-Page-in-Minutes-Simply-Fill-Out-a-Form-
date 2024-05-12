<?php
session_start();

require_once './Classes/Database.php';
require_once './functions.php';
require_once './Classes/Website.php';

$_SESSION['errors'] = [];

$formFields = [
    'urlCoverImage', 'mainTitle', 'subtitle', 'personDescription', 'phone', 'location', 'type', 'urlImage1', 'descriptionImage1',
    'urlImage2', 'descriptionImage2', 'urlImage3', 'descriptionImage3', 'descriptionProdServ', 'urlLinkedin', 'urlFacebook', 'urlTwitter', 'urlGoogle'
];

// Allows only Post Requsts
allowOnlyPOST();

// Check if Field are empty or not set
foreach ($formFields as $key => $field) {;
    if (!postfieldExists($field)) {
        $message = "The field: $field is required";
        array_push($_SESSION['errors'], $message);
    }
}



// Checks for Valid Url
foreach ($_POST as $key => $field) {


    if (!validateUrl($key, $field)) {

        $messageUrl = "The Field: $key, is not a valid url.";
        array_push($_SESSION['errors'], $messageUrl);
    }
}

// Check if there are errors, redirects to page2.php and prints errors
if ($_SESSION['errors']) {
    header('Location: page2.php');
    die();
}


$createConn = new Connection("mysql", "localhost", "challenge16_db", "root", "");
$createConn->connect();
$connObj = $createConn->getConnection();

$website1 = new Website($_POST, $connObj);
$website1->createWebsite();



header("Location: page3.php?id=" . $connObj->lastInsertId());
