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

$Resetmember = $_GET['resetmember'];

$readquery = "SELECT * FROM 2020_member WHERE mid='$Resetmember' ";

$readresult = $conn->query($readquery);

if (!$readresult) {
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
        <div class="d-flex justify-content-center text-align-center p-5">
            <div>
                <h3 class="text-primary">Are you sure you want reset this member password?</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                while ($rowread = $readresult->fetch_assoc()) {

                    $adrowid3 = $rowread['mid'];
                    $admemail3 = $rowread['memail'];
                    $admpass3 = $rowread['mpass'];
                }
                ?>
                <div class="row justify-content-center p-2">
                    <div class="col-6">
                        <h4>ID: <?php echo $adrowid3; ?> </h4>
                    </div>
                </div>
                <div class="row justify-content-center p-2">

                    <div class="col-6">
                        <h4>Email: <?php echo $admemail3; ?> </h4>
                    </div>
                </div>
                <div class="row justify-content-center p-2">
                    <div class="col-6">
                        <h4>Password: <?php echo $admpass3; ?> </h4>
                    </div>
                </div>
                <div class="row justify-content-center p-2">
                    <a class="text-light btn btn-primary w-50" href='adresetpassprocess.php?resetmember3=<?php echo $adrowid3?>'>Reset Password</a>
                </div>
                <div class="row justify-content-center p-1">
                    <button class="btn btn-secondary w-50" onclick="window.history.back()">No</button>
                </div>
            </div>
        </div>
    </div>
    <?php include("../layouts/admin/bodyjs.php") ?>
</body>

</html>