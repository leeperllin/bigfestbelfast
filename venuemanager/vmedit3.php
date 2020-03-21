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

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.evenue, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_event.ecatid, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.eid = '$Eventid2'";

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
<?php
while ($rowread = $readresult->fetch_assoc()) {

    $Eventid3 = $rowread['eid'];
    $Eventcategoryid3 =$rowread['ecatid'];
    $Eventtitle3 = $rowread['etitle'];
    $Eventvenue3 = $rowread['evenue'];
    $Eventdate3 = $rowread['edate'];
    $Eventtime3 = $rowread['etime'];
    $Eventimage3 = $rowread['eimage'];
    $Eventcategoryname3 = $rowread['etname'];
    

    echo"<form enctype='multipart/form-data' action='vmeditprocess.php' method='POST'>
       

    <input type='hidden' value='$Eventid3' name='editid' />
    <br>
    
    <label>Event Title: </label>
    <input type='text' placeholder='$Eventtitle3' name='Neweventtitle' size='30' required>
    <br>
        
    <label>Event Venue: </label>
    <input type='text' placeholder='$Eventvenue3' name='Neweventvenue' size='30' required>
    <br>
        
    <label>Event Date: </label>
    <input type='date' placeholder='$Eventdate3' name='Neweventdate' >
    <br>
    
    <label>Event time: </label>
    <input type='time' placeholder='$Eventtime3' name='Neweventtime' >
    <br>
    
    <label>Event Category: </label>
    <option value='$Eventcategoryid3'>$Eventcategoryname3</option>
    <br>
    
    <p>Event images: <<img src='../image/$Eventimage3'</p>
    <input name='Neweventimage' type='file'>
    
    <input type='submit' value='Edit Event'  name='requesteditevent' >
    <br>
      
 
        
</form>";
}
?>
    </body>
</html>
