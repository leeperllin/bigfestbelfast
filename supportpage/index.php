<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$readquery = "SELECT * FROM `2020_support`  ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}
?>
<html>
    <head>
    <p>Support Page</p>
        <?php
        
        while ($rowread = $readresult->fetch_assoc()) {

        $rowid = $rowread['sid'];
        $supportdes = $rowread['sdes'];
        

        echo"<p>$supportdes </p> ";
        
        }
        ?>
        
    </head>
</html>