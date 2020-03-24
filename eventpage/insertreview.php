<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

echo "$member";

$reviewtext= $_POST['sentreview'];
$Reventid = $_POST['revieweventid'];

$insertreview = "INSERT INTO 2020_reviews (eventid, comment, memberid) VALUES ('$Reventid', '$reviewtext', '$member')";



$insert = $conn->query($insertreview);
if(!$insert){
    echo $conn->error;
}else{
    echo"<p> Thanks for submitting your review</p>";
    header('refresh:1.5; url=eventdetails.php');
}

?>

