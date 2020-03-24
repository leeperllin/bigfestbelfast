<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

if(isset($_SESSION['userid_40245529'])){   
    $member = $_SESSION['userid_40245529']; 
}

$Reviewdelid = $_GET['deletereview'];


$updatereviewquery="DELETE FROM 2020_reviews WHERE rid='$Reviewdelid'";

$updatereviewresult = $conn->query($updatereviewquery);

if (!$updatereviewresult) {
    echo $conn->error;
    
}else {
    echo " Delete review successful ";
}


?>
