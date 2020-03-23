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

$readquery = "SELECT * FROM 2020_member "; 

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>

<html>
    <head>
    <p>Home Page  <a href ="index.php">User Details</a>  <a href ="">Review Checking </a><br>  </p>
    
    <?php
    while ($rowread = $readresult->fetch_assoc()) {
        
        $adrowid = $rowread['mid'];
        $admfirstname = $rowread['mfirstname'];
        $admlastname = $rowread['mlastname'];
        $admemail = $rowread['memail'];
        $admpass = $rowread['mpass'];
        
        echo"<p>ID: $adrowid </p> ";
        echo"<p>Name: $admlastname $admfirstname </p> ";
        echo"<p>Email: $admemail </p>";
        echo"<p>Password: $admpass </p>";
        
        echo"<a href='addelete.php?deletemember=$adrowid'>Delete</a><br>";
        echo"<a href='adresetpass.php?resetmember=$adrowid'>Reset Password</a>";
    }
    ?>
    
    </head>
</html>
