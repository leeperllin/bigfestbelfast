<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if(!isset($_SESSION['VMname_40245529'])){
    header("Location: vmsignin.php");
}

if(isset($_SESSION['VMid_40245529'])){   
    $venuemanager = $_SESSION['VMid_40245529'];
    
}
echo "$venuemanager";

$Deletecatid = $_GET['deletecatid'];

$readquery = "SELECT 2020_event.etitle, 2020_event.eimage,2020_event.eid
              FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.ecatid ='$Deletecatid' AND 2020_event.evmid='$venuemanager' ";
              
                
$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>

<html>
    <body>
        <h1>Delete event Page2</h1> 
        
        <?php
        
        while ($rowread = $readresult->fetch_assoc()) {
        $Eventid = $rowread['eid'];
        $Eventtitle = $rowread['etitle'];
        $Eventimage = $rowread['eimage'];
        
        
        
        echo"<img src='../image/$Eventimage'<br>"; 
        echo"<a href='vmdelete3.php?deleteeventid=$Eventid'>$Eventtitle</a><br>";
        
        
        
        
        
        }
        
        ?>
        
    </body>
</html>