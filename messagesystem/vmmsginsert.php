<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
} 


echo "$venuemanager";


if(isset($_POST['sendmessage'])){
    
$Msgreceiver= $_POST['msgreceiver'];
$Msgcontent= $_POST['msgcontent'];
$Msgdatetime= date("Y-m-d H:i");


$insertreview = "INSERT INTO 2020_message (receiver, sender, msgcontent, datetime) VALUES ('$Msgreceiver', '$venuemanager', '$Msgcontent', '$Msgdatetime' )";



$insert = $conn->query($insertreview);
if(!$insert){
    echo $conn->error;
}else{
    echo"<p> Message Sent</p>";
    echo"$insertreview";
    
   // header("Location: vmmessagebox.php?sentoid='$Msgreceiver'");
    
}
}

?>


