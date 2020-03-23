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

$Resetmember = $_GET['resetmember'];

$readquery = "SELECT * FROM 2020_member WHERE mid='$Resetmember' "; 

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
    <p>Are you sure you want reset this member password?</p>
    
    <?php
    while ($rowread = $readresult->fetch_assoc()) {
        
        $adrowid3 = $rowread['mid'];
        $admemail3 = $rowread['memail'];
        $admpass3 = $rowread['mpass'];
        
        echo"<p>ID: $adrowid3 </p> ";
        echo"<p>Email: $admemail3 </p>";
        echo"<p>Password: $admpass3 </p>";
        
        echo"<a href='adresetpassprocess.php?resetmember3=$adrowid3'>Reset Password</a>";
        
    }
    ?>
    
    </head>
</html>
