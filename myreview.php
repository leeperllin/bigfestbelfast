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

$checkreviewquery = "SELECT 2020_reviews.rid, 2020_reviews.comment, 2020_event.etitle 
                   FROM 2020_event
                   INNER JOIN 2020_reviews
                   ON
                   2020_event.eid = 2020_reviews.eventid
                   WHERE 2020_reviews.memberid= $member ";

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
        <div class="container-fluid">
            <div class="d-flex justify-content-center text-center pt-3">
                <h1>My Review</h1>
            </div>
            <?php
            while ($rowread = $checkreviewresult->fetch_assoc()) {

                $Reviewid = $rowread['rid'];
                $Eventtitle = $rowread['etitle'];
                $Eventreview = $rowread['comment'];
            ?>

                <div class="card m-3">
                    <div class="card-header bg-primary text-light">
                        You had posted
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">in <i class="text-primary"><?php echo  $Eventtitle; ?></i> event</h5>
                        <p class="card-text"><?php echo $Eventreview; ?></p>
                        <div class="row">
                            <a class="btn btn-primary m-1" href='myreviewedit.php?editreview=<?php echo $Reviewid; ?>'>Edit Review</a>
                            <a class="btn btn-danger m-1" href='myreviewdeleteprocess.php?deletereview=<?php echo $Reviewid; ?>'>Delete Review</a>
                        </div>
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