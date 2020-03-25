<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['ADname_40245529'])) {
    header("Location: adsignin.php");
}
if (isset($_SESSION['ADid_40245529'])) {
    $admin = $_SESSION['ADid_40245529'];
}

$admindelreview = $_GET['deletereview'];


$updatereviewquery = "DELETE FROM 2020_reviews WHERE rid='$admindelreview'";

$updatereviewresult = $conn->query($updatereviewquery);

if (!$updatereviewresult) {
    echo $conn->error;
} ?>

<html>
<?php
include("../layouts/admin/head.php")
?>

<body>
    <?php include("../admin/components/navbar.php") ?>
    <div class="container justify-content-center">
        <div class="d-flex justify-content-center p-5">
            <h5 class="text-primary">Delete review successful!</h5>
        </div>
        <div class="d-flex justify-content-center p-5">
            <a href="adreviewcheck.php">
                <div class="btn btn-primary">Back to Review Checking</div>
            </a>
        </div>
    </div>



    <?php include("../layouts/admin/bodyjs.php") ?>
</body>

</html>