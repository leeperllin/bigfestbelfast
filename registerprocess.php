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
$Mnewquestion= $_POST["mnewquestion"];
$Mnewanswer= $_POST["mnewanswer"];



$registerquery = "INSERT INTO 2020_member (mfirstname,mlastname,memail,mpass,mquestion,manswer) VALUES ('$Mnewfirstname','$Mnewlastname','$Mnewemail','$Mnewpass','$Mnewquestion','$Mnewanswer')";

$registerresult = $conn -> query($registerquery);
 if (!$registerresult ) {
        echo $conn->error;
        
 }
 
?>

<html>
    <head>
        
    <p>registered successful</p>
    <a href="signin.php">Back to Sign in</a>
        
    </head>
</html>