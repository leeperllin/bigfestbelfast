<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

if(isset($_SESSION['username_40245529'])){   
    $membername = $_SESSION['username_40245529']; 
}


$downloadbookingid = $_GET['bookingdownload'];

$Dbookingquery="SELECT 2020_booking.bid, 2020_event.eid, 2020_event.etitle, 2020_event.edate, 2020_event.etime, 2020_event.eimage, 2020_venuecat.vaddress
              FROM 2020_event
              INNER JOIN 2020_booking
              ON
              2020_event.eid= 2020_booking.beventid
              INNER JOIN 2020_venuecat
              ON
              2020_event.evenueid= 2020_venuecat.vid
              WHERE 2020_booking.bid= $downloadbookingid ";

$Dbookingresult = $conn->query($Dbookingquery);

if (!$Dbookingresult) {
    echo $conn->error;
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>E-Ticket</h1>
    <p1>Thank you for booking the event</p1>
        <?php
        
    
        
    while ($rowread = $Dbookingresult->fetch_assoc()) {

    $Bookingid = $rowread['bid'];
    $Eeventtitle = $rowread['etitle'];
    $Eeventaddress = $rowread['vaddress'];
    $Eeventdate = $rowread['edate'];
    $Eeventtime = $rowread['etime'];
    $Eeventimage = $rowread['eimage'];
    
    echo"<p>Booking ID: $Bookingid</p>";
    echo"<p>Purchased by: $membername</p>";
    echo"<p>Event Title: $Eeventtitle </p> ";
    echo"<p>Event Address: $Eeventaddress </p> ";
    echo"<p>Event Date: $Eeventdate </p> ";
    echo"<p>Event Time: $Eeventtime </p> ";
    
    
    
}

     ?>
    
    <input type="button" value="Print" onclick="window.print();"
    </body>
</html>
