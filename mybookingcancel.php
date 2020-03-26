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

$cancelbookingid = $_GET['bookingcancel'];

$deletebookingquery = "DELETE FROM `2020_booking` WHERE bid='$cancelbookingid' ";

$deletebookingresult = $conn->query($deletebookingquery);

if (!$deletebookingresult) {
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
        <div class="container justify-content-center">
            <div class="d-flex justify-content-center p-5">
                <h5 class="text-primary">The booking has been cancel successfully!</h5>
            </div>
            <div class="d-flex justify-content-center p-5">
                <a href="index.php">
                    <div class="btn btn-primary m-1">Home Page</div>
                </a>
                <a href="mybooking.php">
                    <div class="btn btn-primary m-1">My Booking</div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>