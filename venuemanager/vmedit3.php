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


$Eventid2 = $_GET['eventid'];

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.eaddress, 2020_event.edes, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.eid='$Eventid2'";
              

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}             


?>


<html>
    <head>
        
        <?php
echo" <form enctype='multipart/form-data' action='vmeditprocess.php' method='POST'>
     
    
    <input type='hidden' value='$Eventid2' name='vmeditid'>";
     

//for value part
    while($row2 = $readresult->fetch_assoc()){
    $valuetitle = $row2['etitle'];
    $valueaddress = $row2['eaddress'];
    $valuedes = $row2['edes'];
    $valuedate = $row2['edate'];
    $valuetime = $row2['etime'];   
}    

echo" <label>Event Title: </label>
    <input type='text' value=$valuetitle name='Neweventtitle' id='Neweventtitle' size='30' required>
    <br>
        
    <label>Event Address: </label>
    <input type='text' value='$valueaddress' name='Neweventaddress' id='Neweventaddress' size='30' required>
    <br>
    
    <label>Event Description: </label>
    <input type='text' value='$valuedes' name='Neweventdescription' id='Neweventdescription'>
    <br>
        
    <label>Event Date: </label>
    <input type='date' value='$valuedate' name='Neweventdate' id='Neweventdate' >
    <br>
    
    <label>Event time: </label>
    <input type='time' value='$valuetime' name='Neweventtime' id='Neweventtime' >
    <br>
    
    <Label>Event Category:</label>
    <select name='Newcatevent' required/>";
    

//for showing the option select

$showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
$showoptionresult = $conn->query($showoptionquery);

echo"<option value=''>Choose Category</option> ";

while($row = $showoptionresult->fetch_assoc()){
    $catname = $row['etname'];
    $catid = $row['etid'];
    
    echo"<option value='$catid'>$catname</option>";
}
//image no need value
    echo"<label>Event images: </label>
    <input name='Neweventimage' id='Neweventimage' type='file'>
    
    <input type='submit' value='Edit Event'  name='requesteditevent' >
    <br>
    
</form>";
?>

</head>
</html>
    





















