<?php
session_start();
include("showerrors.php");
include("conn.php");

if(!isset($_SESSION['username_40245529'])){
    header("Location: signin.php");
}


$editid = $_POST["editid"];
$editmfirstname = $_POST["Newmfirstname"];
$editmlastname = $_POST["Newmlastname"];
$editmemail = $_POST["Newmemail"];


$editquery = "UPDATE 2020_member SET mfirstname='$editmfirstname', mlastname='$editmlastname', memail='$editmemail' WHERE mid='$editid'";

$editresult = $conn -> query($editquery);
 if (!$editresult ) {
        echo $conn->error;
 }
 
 
echo"Edit Successfully"; 
echo"<a href='index.php'>Back to Home Page</a>";
?>


