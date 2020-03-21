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

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.evenue, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_venuemanager.vmid = '$venuemanager'";
              
                
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
        echo"<a href=index.php>My Events</a><br>";
        echo"<a href=vmedit.php>Edit Events</a><br>";
        echo"<a href=vmupload.php>Upload Events</a><br>";
        echo"<a href=vmdelete.php>Delete Events</a><br>";
        
        while ($rowread = $readresult->fetch_assoc()) {

        $eventid = $rowread['eid'];
        $eventtitle = $rowread['etitle'];
        $eventvenue = $rowread['evenue'];
        $eventdate = $rowread['edate'];
        $eventtime = $rowread['etime'];
        $eventimage = $rowread['eimage'];
        $eventcategory = $rowread['etname'];
        $venuemanagername = $rowread['vmname'];

        echo"<img src='../image/$eventimage'<br>"; 
        echo"<p>Event Title: $eventtitle </p> ";
        echo"<p>Event Venue: $eventvenue </p> ";
        echo"<p>Event Date: $eventdate </p> ";
        echo"<p>Event Time: $eventtime </p> ";
        echo"<p>Event Category: $eventcategory </p><br> ";

    
    }
          
        
        ?>
    </body>
</html>
