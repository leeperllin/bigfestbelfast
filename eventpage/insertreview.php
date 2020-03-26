<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

$reviewtext = $_POST['sentreview'];
$Reventid = $_POST['revieweventid'];

$insertreview = "INSERT INTO 2020_reviews (eventid, comment, memberid) VALUES ('$Reventid', '$reviewtext', '$member')";



$insert = $conn->query($insertreview);
if (!$insert) {
    echo $conn->error;
} else { ?>
    <html>
    <?php
    include("../layouts/sechead.php");
    ?>

    <body>
        <?php include("../components/secnavbar.php"); ?>


        <div class="container justify-content-center">
            <div class="d-flex justify-content-center p-5">
                <h5 class="text-primary">Thanks for submitting your review</h5>
            </div>
            <div class="d-flex justify-content-center p-5">
                <a href="index.php">
                    <div class="btn btn-primary">Back to Event page</div>
                </a>
            </div>
        </div>

        <?php
        include("../layouts/secbodyjs.php");
        ?>
    </body>

    </html>

<?php
}
?>