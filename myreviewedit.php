<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
}

$editreviewid = $_GET['editreview'];


$checkreviewquery = "SELECT 2020_reviews.rid, 2020_reviews.comment, 2020_event.etitle 
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
<?php
include("layouts/head.php");
?>

<body>
    <?php include("components/navbar.php") ?>
    <?php include("components/sidenav.php") ?>
    <div class="main">
        <div class="container">
            <?php
            while ($rowread = $checkreviewresult->fetch_assoc()) {

                $Reviewid = $rowread['rid'];
                $Eventtitle = $rowread['etitle'];
                $Eventreview = $rowread['comment']; ?>

                <!-- <p>in <?php echo $Eventtitle; ?> Event </p> -->

                <div class="card m-3">
                    <div class="card-body">
                        <form action='myrevieweditprocess.php' method='POST'>
                            <input type='hidden' name='reviewid' value='<?php echo $Reviewid; ?>' />
                            <p>You had posted:</p>
                            <h5 class="card-title">in <i class="text-primary"><?php echo  $Eventtitle; ?></i> event</h5>
                            <textarea class="form-control" name='reviewtextedit' aria-label="With textarea"><?php echo $Eventreview; ?></textarea>
                            <div class="mt-2">
                                <input class="btn btn-primary" type='submit' name='edit' value='Confirm Edit' />
                            </div>
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>