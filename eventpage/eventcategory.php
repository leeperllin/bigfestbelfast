<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$allcatevent = $_GET['eventcategory'];

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.edes, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname, 2020_venuecat.vname, 2020_venuecat.vid, 2020_venuecat.vaddress FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuecat
              ON
              2020_venuecat.vid = 2020_event.evenueid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              
              WHERE 2020_event.ecatid ='$allcatevent'";
              
                
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
    <p>Hi world!
    <a href="../index.php">Home</a>
    <a href="index.php">All Event</a>
    <?php
    //for showing all category in the All Event , do css with option select

    $showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
    $showoptionresult = $conn->query($showoptionquery);



    while ($row = $showoptionresult->fetch_assoc()) {
        $catname = $row['etname'];
        $catid = $row['etid'];
        echo"<a href='eventcategory.php?eventcategory=$catid'>$catname</a>";
    }
    ?>
    <a href="#">Venue</a>
    <a href="supportpage/index.php">Support Us</a></p>
  
    
    
    <?php
    while ($rowread = $readresult->fetch_assoc()) {

        $Eeventid = $rowread['eid'];
        $Eeventtitle = $rowread['etitle'];
        $Eeventaddress = $rowread['vaddress'];
        
        $Eeventdate = $rowread['edate'];
        $Eeventtime = $rowread['etime'];
        $Eeventimage = $rowread['eimage'];
        $Eeventcategory = $rowread['etname'];
        $Evenuemanagername = $rowread['vmname'];

        echo"<img src='../image/$Eeventimage'<br>"; 
        echo"<p>Event Title: $Eeventtitle </p> ";
        echo"<p>Event Address: $Eeventaddress </p> ";
        echo"<p>Event Date: $Eeventdate </p> ";
        echo"<p>Event Time: $Eeventtime </p> ";
        echo"<p>Event Category: $Eeventcategory </p> ";
        echo"<p>Event submited by: $Evenuemanagername manager </p> ";
        echo"<a href='eventdetails.php?eventdetailsid=$Eeventid'>More Details</a><br>";
    }
    ?>
    </body>
</html>