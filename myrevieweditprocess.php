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

$Revieweditid = $_POST['reviewid'];
$Reviewtext = $_POST['reviewtextedit'];

$updatereviewquery="UPDATE 2020_reviews SET comment='$Reviewtext' WHERE rid='$Revieweditid'";

$updatereviewresult = $conn->query($updatereviewquery);

if (!$updatereviewresult) {
    echo $conn->error;
    
}else {
    echo " Edit review successful ";
}


?>
