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


$Deleteeventid2 = $_GET['deleteeventid'];


$readquery = "SELECT 2020_event.etitle, 2020_event.eimage,2020_event.eid
              FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.eid='$Deleteeventid2' AND 2020_event.evmid='$venuemanager' ";
              
                
$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <p>Are you sure you want to delete this event?<p>
            
        <?php
    //help me built one more button to with value = 'NO' and it can go back to the previous page, if u know help me built    
    while ($rowread = $readresult->fetch_assoc()) {

    $deleteid = $rowread['eid'];
    $deletitle = $rowread['etitle'];
    $deleimage = $rowread['eimage'];
   
}
    echo"<form action='vmdeleteprocess.php' method='POST'>";
    echo"<img src='../image/$deleimage'<br>"; 
    echo"$deletitle"; 
    echo"<input type='hidden' name='deleteEid' value='$deleteid'>";
    
    echo"<input type='submit' value='YES' name='deleteevent' >
    
    
    
    </form>"; 
    

        ?>
    </body>
</html>
