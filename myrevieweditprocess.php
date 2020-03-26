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

$Revieweditid = $_POST['reviewid'];
$Reviewtext = $_POST['reviewtextedit'];

$updatereviewquery = "UPDATE 2020_reviews SET comment='$Reviewtext' WHERE rid='$Revieweditid'";

$updatereviewresult = $conn->query($updatereviewquery);

if (!$updatereviewresult) {
    echo $conn->error;
} else { ?>
    <html>
    <?php
    include("layouts/head.php");
    ?>

    <body>
        <?php include("components/navbar.php") ?>
        <?php include("components/sidenav.php") ?>
        <div class="main">
            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-primary">Edit review successfully!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="index.php">
                        <div class="btn btn-primary m-1">Home Page</div>
                    </a>
                    <a href="myreview.php">
                        <div class="btn btn-primary m-1">My Review</div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include("layouts/bodyjs.php");
        ?>
    </body>

    </html>


<?php
}
?>