<?php
session_start();
include("showerrors.php");
include("conn.php");

$email = $_POST['email'];
$opwd = $_POST['opwd'];
$npwd = $_POST['npwd'];
$cpwd = $_POST['cpwd'];


if($npwd==$cpwd){
$selectquery = "SELECT memail, mpass FROM `2020_member` WHERE memail= '$email' AND mpass='$opwd'";

$selectresult = $conn->query($selectquery);
$numrows = $selectresult->num_rows;

if($numrows>0){
    
    $changepassquery = "UPDATE 2020_member set mpass='$npwd' WHERE memail='$email'";
    $changepassresult = $conn -> query($changepassquery); 
    
    echo"<p>Password Changed</p>";
echo"<p><a href=signin.php>Back to Sign in Page</a></p>";

}else{
    echo"<p>Wrong email</p>";
}
}else{
    echo"<p>Password does not match</p>";
}
    
    
?>
