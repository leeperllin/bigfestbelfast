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

$Resetmember3 = $_GET['resetmember3'];

$Resetpass = "000000";

$resetpassquery = "UPDATE 2020_member set mpass='$Resetpass' WHERE mid='$Resetmember3'";
 
$resetresult = $conn -> query($resetpassquery);

 if (!$resetresult ) {
        echo $conn->error;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      echo "The member password has been reset to $Resetpass successfully!";
      
      
        ?>
    </body>
</html>

