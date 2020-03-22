<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['VMname_40245529'])) {
    header("Location: vmsignin.php");
}
if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}
echo "$venuemanager";

$Deleteeventid3 = $_POST['deleteEid'];

$deletequery = "DELETE FROM `2020_event` WHERE eid='$Deleteeventid3' ";
 
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
      echo "The event has been deleted successfully!";
      
      //header('refresh:1; url=vmdelete.php');
        ?>
    </body>
</html>
