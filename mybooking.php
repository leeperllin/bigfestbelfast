<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

if(isset($_SESSION['userid_40245529'])){   
    $member = $_SESSION['userid_40245529']; 
}

$showbookingquery="SELECT 2020_booking.bid, 2020_event.eid, 2020_event.etitle, 2020_event.eaddress, 2020_event.edate, 2020_event.etime, 2020_event.eimage
              FROM 2020_event
              INNER JOIN 2020_booking
              ON
              2020_event.eid= 2020_booking.beventid
              WHERE 2020_booking.bmemberid= $member ";

$showbookingresult = $conn->query($showbookingquery);

if (!$showbookingresult) {
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
    while ($rowread = $showbookingresult->fetch_assoc()) {

    $Bookingid = $rowread['bid'];
    $Eeventtitle = $rowread['etitle'];
    $Eeventaddress = $rowread['eaddress'];
    $Eeventdate = $rowread['edate'];
    $Eeventtime = $rowread['etime'];
    $Eeventimage = $rowread['eimage'];
    

    echo"<img src='image/$Eeventimage'<br>";
    echo"<p>Event Title: $Eeventtitle </p> ";
    echo"<p>Event Address: $Eeventaddress </p> ";
    echo"<p>Event Date: $Eeventdate </p> ";
    echo"<p>Event Time: $Eeventtime </p> ";
    
    echo"<a href='mybookingcancel.php?bookingcancel=$Bookingid'>Cancel Booking</a>";
    echo"<a href='mybookingdownload.php?bookingdownload=$Bookingid'>Download pdf Ticket</a>";
   
    
}
        ?>
    </body>
</html>
