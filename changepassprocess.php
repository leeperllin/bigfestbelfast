<?php
session_start();
include("showerrors.php");
include("conn.php");

if(isset($_SESSION['username_40245529'])){   
    $membername = $_SESSION['username_40245529']; 
}

$opwd = $_POST['opwd'];
$npwd = $_POST['npwd'];
$cpwd = $_POST['cpwd'];


if($npwd==$cpwd){
$selectquery = "SELECT memail, mpass FROM `2020_member` WHERE memail= '$membername' AND mpass='$opwd'";

$selectresult = $conn->query($selectquery);
$numrows = $selectresult->num_rows;

if($numrows>0){
    
    $changepassquery = "UPDATE 2020_member set mpass='$npwd' WHERE memail='$membername'";
    $changepassresult = $conn -> query($changepassquery); 
    
    echo"<p>Password Changed</p>";
echo"<p><a href=signin.php>Back to Sign in Page</a></p>";

}else{
    echo"<p>Wrong old password</p>";
}
}else{
    echo"<p>Password does not match</p>";
}
    
    
?>
