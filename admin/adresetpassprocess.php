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

$Resetmember3 = $_GET['resetmember3'];

$Resetpass = "000000";

$resetpassquery = "UPDATE 2020_member set mpass='$Resetpass' WHERE mid='$Resetmember3'";

$resetresult = $conn->query($resetpassquery);

if (!$resetresult) {
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
            <h5 class="text-primary">The member password has been reset to <?php echo $Resetpass ?> successfully!</h5>
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