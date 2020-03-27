<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

$alleventid = $_GET['eventdetailsid'];

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
<?php
include("../layouts/sechead.php");
?>

<body>
    <?php include("../components/secnavbar.php"); ?>


    <div class="container">
        <?php
        //put nav bar
        //print all event 
        while ($rowread = $readresult->fetch_assoc()) {

            $Eeventid = $rowread['eid'];
            $Eeventtitle = $rowread['etitle'];
            $Eeventaddress = $rowread['vaddress'];

            $Eeventdate = $rowread['edate'];
            $Eeventtime = $rowread['etime'];
            $Eeventimage = $rowread['eimage'];
            $Eeventcategory = $rowread['etname'];
            $Evenuemanagername = $rowread['vmname'];
            //print all event 
        ?>
            <div>
                <img class="rounded eventDetailsImage m-3" src='../image/<?php echo $Eeventimage; ?>' />
                <h1 class="m-3"><?php echo $Eeventtitle; ?> </h1>
                <hr>
                <div class="container-fluid m-3">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-primary pb-2">Details</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Address: <b><?php echo $Eeventaddress; ?></b></p>
                            <p>Date: <b><?php echo $Eeventdate; ?></b></p>
                            <p>Time: <b><?php echo $Eeventtime; ?></b></p>
                        </div>
                        <div class="col-6">
                            <p>Category: <b><?php echo $Eeventcategory; ?></b></p>
                            <p>submited by: <b><?php echo $Evenuemanagername; ?> manager</b></p>
                        </div>


                    </div>
                </div>
                <hr>
            </div>
        <?php
        }
        ?>
        <div class="container-fluid m-3">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary pb-2">Description</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        <b>
                            <?php
                            while ($rowread2 = $readresult2->fetch_assoc()) {
                                $EeventDescription = $rowread2['edes'];
                                echo "$EeventDescription";
                            }
                            ?>
                        </b>
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <?php
            //button under event (if login already show book now, else show sign in button)
            if ($member !== "guest") { ?>
                <div class="row">
                    <a class="btn btn-success w-100 m-3" href='eventbooking.php?ebookingid=<?php echo $alleventid; ?>'>Book Now!</a>
                </div>
            <?php } else { ?>
                <div class="row">
                    <a class="btn btn-success w-100 m-3" href='../signin.php'>Sign in for booking event!</a>
                </div>
            <?php
            }
            ?>
        </div>
        <hr>
        <div class="container-fluid m-3">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary pb-2">Reviews</h2>
                </div>
            </div>
            <?php
            $reviewquery = "SELECT 2020_member.mfirstname, 2020_member.mlastname, 2020_reviews.comment FROM 2020_reviews 
                         INNER JOIN 2020_member ON 2020_reviews.memberid = 2020_member.mid 
                         WHERE 2020_reviews.eventid = $alleventid";

            $reviewresult = $conn->query($reviewquery);

            while ($rowread3 = $reviewresult->fetch_assoc()) {

                $reviewerfirstname = $rowread3['mfirstname'];
                $reviewerlastname = $rowread3['mlastname'];
                $reviewertext = $rowread3['comment']; ?>
                <?php
                if (sizeof($rowread3) !== 0) { ?>

                    <strong><?php echo $reviewerfirstname . " " . $reviewerlastname; ?>:</strong>
                    <p><?php echo $reviewertext; ?></p>
                    <hr>
                <?php
                } else {
                ?>
                    <h1>HELLO WORLD</h1>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
        <div class="container-fluid m-3">
            <p>Post your reviews</p>
            <?php
            if ($member !== "guest") {
                //container for writting comment
            ?>
                <form action='insertreview.php' method='POST'>
                    <div class="input-group">
                        <textarea class="form-control" name='sentreview' aria-label="With textarea"></textarea>
                    </div>
                    <input class="btn btn-primary mt-3" type='submit' value='Submit Review' name=''>
                    <input type='hidden' value='<?php echo $alleventid; ?>' name='revieweventid'>
                </form>
            <?php
            } else {
            ?>
                <a href='../signin.php'>
                    <div class="btn btn-primary">Sign in for leaving a comment</div>
                </a>
            <?php
            }
            ?>

        </div>
    </div>
    <?php include("../components/secfooter.php") ?>
    <?php
    include("../layouts/secbodyjs.php");
    ?>
</body>

</html>