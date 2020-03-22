
<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if(!isset($_SESSION['VMname_40245529'])){
    header("Location: vmsignin.php");
}

$readquery="SELECT 2020_event.ecatid,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              GROUP BY 2020_eventcat.etname";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>

<html>
    <head>
    <h1>Delete event page 1</h1>
    
        <?php
        while ($rowread = $readresult->fetch_assoc()) {
        $categoryid = $rowread['ecatid'];
        $categoryname = $rowread['etname'];
        
        echo"<a href=vmdelete2.php?deletecatid=$categoryid>$categoryname</a><br>";
        
        
        
        
        }
        
        
        
        ?>

        
        
        
        
        
    </head>
</html>


