<?php
session_start();
include("showerrors.php");

if(!isset($_SESSION['username_40245529'])){
    header("Location: signin.php");
}

include("conn.php");

$Mnewfirstname = $_POST["mfirstname"];
$Mnewlastname = $_POST["mlastname"];
$Mnewemail = $_POST["mnewemail"];
$Mnewpass = $_POST["mnewpass"];

$registerquery = "INSERT INTO 2020_member (mfirstname,mlastname,memail,mpass) VALUES ('$Mnewfirstname','$Mnewlastname','$Mnewemail','$Mnewpass')";

$registerresult = $conn -> query($registerquery);
 if (!$registerresult ) {
        echo $conn->error;
 }
 
?>

<htm>
    <head>
        
    <p>registered successful</p>
    <a href="signin.php">Back to Sign in</a>
        
    </head>
</htm>