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

$Deletememberid2 = $_GET['deletemember2'];

$deletequery = "DELETE FROM `2020_member` WHERE mid='$Deletememberid2' ";
 
$deleteresult = $conn -> query($deletequery);

 if (!$deleteresult ) {
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
      echo "The member id has been deleted successfully!";
      
      //header('refresh:1; url=vmdelete.php');
        ?>
    </body>
</html>

