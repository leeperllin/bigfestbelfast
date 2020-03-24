<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

echo "$member";

$alleventid = $_GET['eventdetailsid'];

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.eaddress, 2020_event.edes, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.eid='$alleventid'";


$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

$readquery2 = "SELECT edes FROM 2020_event WHERE eid='$alleventid'";
$readresult2 = $conn->query($readquery2);

if (!$readresult2) {
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
//put nav bar
//print all event 
while ($rowread = $readresult->fetch_assoc()) {

    $Eeventid = $rowread['eid'];
    $Eeventtitle = $rowread['etitle'];
    $Eeventaddress = $rowread['eaddress'];

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
}
//print all event
//button under event (if login already show book now, else show sign in button)


if ($member !== "guest") {
    echo "<a href='eventbooking.php?ebookingid=$alleventid'>Book Now!</a>";
    
} else {

  echo "<a href='../signin.php'>Sign in for booking event!</a>";
}
?>


        <p>Event Description</p>
        <?php
        while ($rowread2 = $readresult2->fetch_assoc()) {
            $EeventDescription = $rowread2['edes'];
            echo"$EeventDescription";
        }
        ?>


        <p>Review Content</p>
        <?php
        $reviewquery = "SELECT 2020_member.mfirstname, 2020_member.mlastname, 2020_reviews.comment FROM 2020_reviews 
                         INNER JOIN 2020_member ON 2020_reviews.memberid = 2020_member.mid 
                         WHERE 2020_reviews.eventid = $alleventid";

        $reviewresult = $conn->query($reviewquery);

        while ($rowread3 = $reviewresult->fetch_assoc()) {
            
            $reviewerfirstname = $rowread3['mfirstname'];
            $reviewerlastname = $rowread3['mlastname'];
            $reviewertext = $rowread3['comment'];

            echo "<strong>Reviewer: $reviewerfirstname $reviewerlastname </strong><p>$reviewertext</p>";
            
        }
        ?>









        <p>Post your reviews</p>
        <?php
        if ($member !== "guest") {
            echo "<form action='insertreview.php' method='POST'>";
            //container for writting comment
            echo"<textarea name='sentreview' style='height:100px'> </textarea> 
             <input type='hidden' value='$alleventid' name='revieweventid'>";
            echo"<input type='submit' value='Submit Review' name=''> </form>";
        } else {
            echo"<a href='../signin.php'>Sign in for leaving a comment</a>";
        }
        ?>




    </body>
</html>
