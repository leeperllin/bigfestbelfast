<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

$Mmemberid = $_GET['memberid'];

$readquery = "SELECT * FROM `2020_member` WHERE mid= '$Mmemberid'  ";

$readresult = $conn->query($readquery);

if (!$readresult) {
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
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-12">
                    <h1>My Profile</h1>
                </div>
            </div>
        </div>
        <div class="container border rounded p-4">
            <?php
            while ($rowread = $readresult->fetch_assoc()) {

                $rowid = $rowread['mid'];
                $mfirstname = $rowread['mfirstname'];
                $mlastname = $rowread['mlastname'];
                $memail = $rowread['memail'];
                $mpass = $rowread['mpass'];
            ?>
                <div class="row">
                    <div class="col-6">
                        <h2>Name:</h2>
                    </div>
                    <div class="col-6">
                        <h4><?php echo $mlastname . " " . $mfirstname; ?> </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h2>Email:</h2>
                    </div>
                    <div class="col-6">
                        <h4><?php echo $memail; ?> </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h2>Password:</h2>
                    </div>
                    <div class="col-6">
                        <h4> <?php echo $mpass; ?> </h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                    <a class="btn btn-primary" href="meditdetailsform.php">Edit Details</a>
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