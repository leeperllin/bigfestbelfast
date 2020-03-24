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

$cancelbookingid = $_GET['bookingcancel'];

$deletebookingquery = "DELETE FROM `2020_booking` WHERE bid='$cancelbookingid' ";
 
$deletebookingresult = $conn -> query($deletebookingquery);

 if (!$deletebookingresult ) {
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
      echo "The booking has been cancel successfully!";
      
     
        ?>
    </body>
</html>