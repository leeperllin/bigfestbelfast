<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if(!isset($_SESSION['vmlogin'])){
    header("Location: vmlog.php");
}

$readquery = "SELECT * FROM `` "; 

$readresult = $conn -> query($readquery);

 if (!$readresult ) {
        echo $conn->error;
}
?>

//css design 



<?php

while($rowread = $readresult->fetch_assoc()){
    
    
}

?>
