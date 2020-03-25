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


if(isset($_POST['sendmessage'])){
    
$Msgreceiver= $_POST['msgreceiver'];
$Msgcontent= $_POST['msgcontent'];
$Msgdatetime= date("Y-m-d H:i");


$insertreview = "INSERT INTO 2020_message (receiver, sender, msgcontent, datetime) VALUES ('$Msgreceiver', '$member', '$Msgcontent', '$Msgdatetime' )";



$insert = $conn->query($insertreview);
if(!$insert){
    echo $conn->error;
}else{
    echo"<p> Message Sent</p>";
    
    header("Location: messagebox.php?receiver=$Msgreceiver");
    
}
}

?>


