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

$Deletememberid2 = $_GET['deletemember2'];

$deletequery = "DELETE FROM `2020_member` WHERE mid='$Deletememberid2' ";

$deleteresult = $conn->query($deletequery);

if (!$deleteresult) {
    echo $conn->error;
}

?>
<html>
<?php
include("../layouts/admin/head.php")
?>

<body>
    <?php include("../admin/components/navbar.php") ?>
    <div class="container justify-content-center">
        <div class="d-flex justify-content-center p-5">
            <h5 class="text-primary">Member id has been deleted successfully!</h5>
        </div>
        <div class="d-flex justify-content-center p-5">
            <a href="index.php">
                <div class="btn btn-primary">Back to User Details</div>
            </a>
        </div>
    </div>
    <?php include("../layouts/admin/bodyjs.php") ?>
</body>

</html>