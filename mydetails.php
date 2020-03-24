<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

$Mmemberid = $_GET['memberid'];

$readquery = "SELECT * FROM `2020_member` WHERE mid= '$Mmemberid'  ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}
?>

<html>
    <head>

    <h1>My details page</h1>
    
    <a href='mydetails.php'>My details </a>
    <a href='mybooking.php'>My Booking </a>
    <a href='myreview.php'>My Review </a>
    
    
    <?php
    while ($rowread = $readresult->fetch_assoc()) {

        $rowid = $rowread['mid'];
        $mfirstname = $rowread['mfirstname'];
        $mlastname = $rowread['mlastname'];
        $memail = $rowread['memail'];
        $mpass = $rowread['mpass'];

        echo"<p>Name: $mlastname $mfirstname </p> ";
        echo"<p>Email: $memail </p>";
        echo"<p>Password: $mpass </p><br>";
        
        echo"<a href=meditdetailsform.php>Edit Details</a>";
    }
    ?>

    

</head>
</html>
