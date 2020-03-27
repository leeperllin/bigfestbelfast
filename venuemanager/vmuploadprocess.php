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

$checkquery = "SELECT eimage FROM `2020_event` ";

$checkresult = $conn->query($checkquery);

if (!$checkresult) {
    echo $conn->error;
}

if (isset($_POST["uploadevent"])) {
    $upeventtitle = $_POST["newetitle"];
    $upeventvenue = $_POST["newvenue"];
    $upeventdes = $_POST["newedes"];
    $upeventdate = $_POST["newedate"];
    $upeventtime = $_POST["newetime"];
    $upeventcat = $_POST["newecat"];
    $upeventimage = $_FILES["neweimage"]['name'];
    $upeventimagetemp = $_FILES['neweimage']['tmp_name'];


    while ($rowread = $checkresult->fetch_assoc()) {
        $eventimagepath = $rowread['eimage'];
    }

    if ($eventimagepath !== $upeventimage) {

        move_uploaded_file($upeventimagetemp, "../image/$upeventimage");
        $uploadquery = "INSERT INTO 2020_event (evmid, etitle,evenueid,edes,edate,etime,ecatid,eimage) VALUES ('$venuemanager', '$upeventtitle','$upeventvenue','$upeventdes','$upeventdate','$upeventtime','$upeventcat', '$upeventimage')";
        $uploadresult = $conn->query($uploadquery);

        if (!$uploadresult) {
            echo $conn->error;
        } else { ?>
            <html>
            <?php
            include("../layouts/venuemanager/head.php");
            ?>

            <body>
                <?php include("../venuemanager/components/navbar.php") ?>

                <div class="container justify-content-center">
                    <div class="d-flex justify-content-center p-5">
                        <h5 class="text-info">Upload Event sucessfully!</h5>
                    </div>
                    <div class="d-flex justify-content-center p-5">
                        <a href="index.php">
                            <div class="btn btn-info m-1">Back to Home Page</div>
                        </a>
                        </a>
                    </div>
                </div>
                <?php
                include("../layouts/venuemanager/bodyjs.php");
                ?>
            </body>

            </html>
        <?php } ?>
    <?php } else { ?>
        <html>
        <?php
        include("../layouts/venuemanager/head.php");
        ?>

        <body>
            <?php include("../venuemanager/components/navbar.php") ?>

            <div class="container justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <h5 class="text-info">Image already exist--Upload Failed!</h5>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <a href="index.php">
                        <div class="btn btn-info m-1"> Back to Home Page</div>
                    </a>
                    </a>
                </div>
            </div>
            <?php
            include("../layouts/venuemanager/bodyjs.php");
            ?>
        </body>

        </html>
    <?php } ?>
<?php
}
?>