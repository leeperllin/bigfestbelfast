<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['ADname_40245529'])) {
    header("Location: adsignin.php");
}
if (isset($_SESSION['ADid_40245529'])) {
    $admin = $_SESSION['ADid_40245529'];
}

$Deletememberid = $_GET['deletemember'];

$readquery = "SELECT * FROM 2020_member WHERE mid='$Deletememberid' "; 

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>

<html>
    <head>
    <p>Home Page</p>
    <a href ="index.php">User Details</a><br>
    <a href ="">Review Checking </a><br>
    <p>Are you sure you want delete this member?</p>
    
    <?php
    while ($rowread = $readresult->fetch_assoc()) {
        
        $adrowid2 = $rowread['mid'];
        $admfirstname2 = $rowread['mfirstname'];
        $admlastname2 = $rowread['mlastname'];
        $admemail2 = $rowread['memail'];
        $admpass2 = $rowread['mpass'];
        
        echo"<p>ID: $adrowid2 </p> ";
        echo"<p>Name: $admlastname2 $admfirstname2 </p> ";
        echo"<p>Email: $admemail2 </p>";
        echo"<p>Password: $admpass2 </p>";
        
        echo"<a href='addeleteprocess.php?deletemember2=$adrowid2'>Yes</a>";
        
    }
    ?>
    
    </head>
</html>
