<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}


$editid = $_POST["editid"];
$editmfirstname = $_POST["Newmfirstname"];
$editmlastname = $_POST["Newmlastname"];
$editmemail = $_POST["Newmemail"];


$editquery = "UPDATE 2020_member SET mfirstname='$editmfirstname', mlastname='$editmlastname', memail='$editmemail' WHERE mid='$editid'";

$editresult = $conn->query($editquery);
if (!$editresult) {
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
                <h5 class="text-primary">Edit Details successfully!</h5>
            </div>
            <div class="d-flex justify-content-center p-5">
                <a href="index.php">
                    <div class="btn btn-primary">Back to Home Page</div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>