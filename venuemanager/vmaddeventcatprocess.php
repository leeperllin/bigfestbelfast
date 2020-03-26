<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['VMname_40245529'])) {
    header("Location: vmsignin.php");
}
if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}

$Newcatname = $_POST["newcatname"];


$insertquery = "INSERT INTO 2020_eventcat (etname) VALUES ('$Newcatname')";

$insertresult = $conn->query($insertquery);
if (!$insertresult) {
    echo $conn->error;
} else { ?>
    <html>
    <?php
    include("../layouts/venuemanager/head.php");
    ?>

    <body>
        <?php
        include("../venuemanager/components/navbar.php")
        ?>
        <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-info">Inserted new category successfully!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="index.php">
                        <div class="btn btn-info m-1">Back to Home Page</div>
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