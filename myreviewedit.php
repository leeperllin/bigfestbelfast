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

$editreviewid = $_GET['editreview'];


$checkreviewquery="SELECT 2020_reviews.rid, 2020_reviews.comment, 2020_event.etitle 
                   FROM 2020_event
                   INNER JOIN 2020_reviews
                   ON
                   2020_event.eid = 2020_reviews.eventid
                   WHERE 2020_reviews.rid= $editreviewid ";

$checkreviewresult = $conn->query($checkreviewquery);

if (!$checkreviewresult) {
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
    while ($rowread = $checkreviewresult->fetch_assoc()) {

    $Reviewid = $rowread['rid'];
    $Eventtitle = $rowread['etitle'];
    $Eventreview = $rowread['comment'];
    
    echo" <form action='myrevieweditprocess.php' method='POST'>";
    
    echo"<input type='hidden' name='reviewid' value='$Reviewid'/>";
    
    echo"<p>You had posted: <input type='text' value='$Eventreview' name='reviewtextedit' /> in $Eventtitle Event ";
    
    echo"<input type='submit' name='edit' value='Edit'/>";
    
    echo"</form>";
   

    
}
        ?>
    </body>
</html>
