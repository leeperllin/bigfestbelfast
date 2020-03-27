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

// echo "$venuemanager";

$checkquery = "SELECT eimage FROM `2020_event` ";
$checkresult = $conn->query($checkquery);
if (!$checkresult) {
    echo $conn->error;
}

if (isset($_POST["requesteditevent"])) {
    $VMeditid = $_POST["vmeditid"];
    $editeventtitle = $_POST["Neweventtitle"];
    $editeventvenue = $_POST["Newcatvenue"];
    $editeventdes = $_POST["Neweventdescription"];
    $editeventdate = $_POST["Neweventdate"];
    $editeventtime = $_POST["Neweventtime"];
    $editcatevent = $_POST["Newcatevent"];
    $editeventimage = $_FILES["Neweventimage"]['name'];
    $editeventimagetemp = $_FILES['Neweventimage']['tmp_name'];

    while ($rowread = $checkresult->fetch_assoc()) {
        $eventimagepath = $rowread['eimage'];
    }

    if ($eventimagepath !== $editeventimage) {
        move_uploaded_file($editeventimagetemp, "../image/$editeventimage");

        $editquery = "UPDATE 2020_event SET etitle='$editeventtitle', evenueid='$editeventvenue', edes='$editeventdes',
              edate='$editeventdate', etime='$editeventtime', ecatid='$editcatevent', eimage='$editeventimage' WHERE eid='$VMeditid'";

        $editresult = $conn->query($editquery);

        if (!$editresult) {
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
                        <h5 class="text-info">Edit Sucessfully!</h5>
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