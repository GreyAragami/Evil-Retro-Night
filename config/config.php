<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-Mar-16
 * Time: 14:19
 */
ob_start();
session_start();

//Algemene info
$WebTitle = "Evil Retro Night";
$WebLogo = "images/logo.png";



//FB Metadata
$FBWebsiteURL = "http://dtsl.ehb.be/~gregory.descamps/ern/";
$FBWebsiteType = "Website";
$FBWebsiteDescription = "The Synthwave Night to be.";
$FBWebsiteImage = "http://dtsl.ehb.be/~gregory.descamps/ern/images/banner.jpg";

//Database
$servername = "dt5.ehb.be";
$username = "AWD078";
$password = "56391724";
$dbname = "AWD078";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}

?>


