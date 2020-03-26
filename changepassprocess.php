<?php
session_start();
include("showerrors.php");
include("conn.php");

if (isset($_SESSION['username_40245529'])) {
    $membername = $_SESSION['username_40245529'];
}

$opwd = $_POST['opwd'];
$npwd = $_POST['npwd'];
$cpwd = $_POST['cpwd'];


if ($npwd == $cpwd) {
    $selectquery = "SELECT memail, mpass FROM `2020_member` WHERE memail= '$membername' AND mpass='$opwd'";

    $selectresult = $conn->query($selectquery);
    $numrows = $selectresult->num_rows;

    if ($numrows > 0) {

        $changepassquery = "UPDATE 2020_member set mpass='$npwd' WHERE memail='$membername'";
        $changepassresult = $conn->query($changepassquery);
?>

        <html>
        <?php
        include("layouts/head.php");
        ?>

        <body>
            <?php include("components/navbar.php") ?>

            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-primary">Password Changed successfully!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="index.php">
                        <div class="btn btn-primary m-1">Home Page</div>
                    </a>
                    <!-- <a href="signin.php">
                        <div class="btn btn-primary m-1">Back to Sign in Page</div>
                    </a> -->
                </div>
            </div>
            <?php
            include("layouts/bodyjs.php");
            ?>
        </body>

        </html>

    <?php } else { ?>
        <html>
        <?php
        include("layouts/head.php");
        ?>

        <body>
            <?php include("components/navbar.php") ?>
            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-primary">Wrong old password!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="changepass.php">
                        <div class="btn btn-primary m-1">Try Agian?</div>
                    </a>
                </div>
            </div>
            <?php
            include("layouts/bodyjs.php");
            ?>
        </body>

        </html>
    <?php  } ?>


<?php } else { ?>
    <html>
        <?php
        include("layouts/head.php");
        ?>

        <body>
            <?php include("components/navbar.php") ?>
            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-primary">New password and Confirm password not match!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="changepass.php">
                        <div class="btn btn-primary m-1">Try Agian?</div>
                    </a>
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