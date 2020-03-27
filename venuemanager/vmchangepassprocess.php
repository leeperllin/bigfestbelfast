<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMname_40245529'])) {
    $venuemanagername = $_SESSION['VMname_40245529'];
}

$vmopwd = $_POST['vmopwd'];
$vmnpwd = $_POST['vmnpwd'];
$vmcpwd = $_POST['vmcpwd'];


if ($vmnpwd == $vmcpwd) {
    $selectquery = "SELECT vmname, vmpass FROM `2020_venuemanager` WHERE vmname= '$venuemanagername' AND vmpass='$vmopwd'";

    $selectresult = $conn->query($selectquery);
    $numrows = $selectresult->num_rows;

    if ($numrows > 0) {

        $changepassquery = "UPDATE 2020_venuemanager set vmpass='$vmnpwd' WHERE vmname='$venuemanagername'";
        $changepassresult = $conn->query($changepassquery);

?>

        <html>
        <?php
        include("../layouts/venuemanager/head.php");
        ?>

        <body>
            <?php include("../venuemanager/components/navbar.php") ?>

            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-info">Password Changed successfully!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="index.php">
                        <div class="btn btn-info m-1">Home Page</div>
                    </a>
                </a>
                </div>
            </div>
            <?php
            include("../layouts/venuemanager/bodyjs.php");
            ?>
        </body>

        </html>

    <?php } else { ?>
        <html>
        <?php
        include("../layouts/venuemanager/head.php");
        ?>

        <body>
            <?php include("../venuemanager/components/navbar.php") ?>
            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-info">Wrong old password!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="vmchangepass.php">
                        <div class="btn btn-info m-1">Try Agian?</div>
                    </a>
                </div>
            </div>
            <?php
            include("../layouts/venuemanager/bodyjs.php");
            ?>
        </body>

        </html>
    <?php  } ?>


<?php } else { ?>
    <html>
    <?php
    include("../layouts/venuemanager/head.php");
    ?>

    <body>
        <?php include("../venuemanager/components/navbar.php") ?>
        <div class="container justify-content-center">
            <div class="d-flex justify-content-center p-5">
                <h5 class="text-info">New password and Confirm password not match!</h5>
            </div>
            <div class="d-flex justify-content-center p-5">
                <a href="vmchangepass.php">
                    <div class="btn btn-info m-1">Try Agian?</div>
                </a>
            </div>
        </div>
        <?php
        include("../layouts/venuemanager/bodyjs.php");
        ?>
    </body>

    </html>
<?php
}
?>