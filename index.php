<?php
session_start();
include("showerrors.php");
include("conn.php");

if(!isset($_SESSION['username_40245529'])){
    header("Location: signin.php");
    
}

if(isset($_SESSION['userid_40245529'])){   
    $member = $_SESSION['userid_40245529'];
    
}else{
    $member = "guest";
}

echo "$member"; 

$readquery = "SELECT * FROM `2020_member`WHERE mid='$member' ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Hi world!</p>
        
        <?php

    while($rowread = $readresult->fetch_assoc()){
    
    $rowid = $rowread['mid'];
    $mfirstname = $rowread['mfirstname'];
    $mlastname = $rowread['mlastname'];
    $memail = $rowread['memail'];
    $mpass = $rowread['mpass'];    
   
}
    
    echo"<a href='mydetails.php?memberid=$rowid'>My Profile</a>";
    
    
    
   



?>

        
    </body>
</html>
