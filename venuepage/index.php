<?php
session_start();
include("../showerrors.php");
include("../conn.php");
//call event information
//$readquery = "SELECT 2020_event.eid, 2020_event.eaddress, 2020_venuecat.vid, 2020_venuecat.vname FROM 2020_event INNER JOIN 2020_venuecat ON 2020_event.evenueid= 2020_venuecat.vid";
$readquery = "SELECT * FROM 2020_venuecat GROUP BY vname";
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
    <a href="../eventpage/index.php">All Event</a>
    <?php
    //for showing all category in the All Event , do css with option select

    $showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
    $showoptionresult = $conn->query($showoptionquery);



    while ($row = $showoptionresult->fetch_assoc()) {
        $catname = $row['etname'];
        $catid = $row['etid'];
        
        echo"<a href='../eventpage/eventcategory.php?eventcategory=$catid'>$catname</a>";
    }
    ?>
    <a href="index.php">Venue</a>
    <a href="../supportpage/index.php">Support Us</a></p>
  
    
    
    <?php
    while ($rowread = $readresult->fetch_assoc()) {

        
        $Venueid = $rowread['vid'];
        $Eeventvenue = $rowread['vname'];
     
       echo" $Eeventvenue <a href='venuecategory.php?venuecat=$Venueid'> More Show </a> <br>";
    }
    ?>
    </body>
</html>
