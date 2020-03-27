<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

if (isset($_SESSION['username_40245529'])) {
    $membername = $_SESSION['username_40245529'];
}






$Msgreceiver = $_POST['msgreceiver'];
$Msgcontent = $_POST['msgcontent'];
$Msgdatetime = date("Y-m-d H:i");




//$selectquery = "SELECT * FROM 2020_venuemanager WHERE vmid=$Msgreceiver";

//$selectresult = $conn->query($selectquery);

//echo"$selectquery";

//$numrows = $selectresult->nums_rows;
//if($numrows>0){

$checkuser = "SELECT * FROM 2020_venuemanager WHERE vmid=$Msgreceiver";
$result = $conn->query($checkuser);

$numrows = $result->num_rows;

if ($numrows > 0) {

    $insertreview = "INSERT INTO 2020_message (receiver, sender, sendername, msgcontent, datetime) VALUES ('$Msgreceiver', '$member','$membername', '$Msgcontent', '$Msgdatetime' )";

    $insert = $conn->query($insertreview);
    if (!$insert) {
        echo $conn->error;
    } else { ?>

        <html>
    <?php
    include("../layouts/sechead.php");
    ?>

    <body>
        <?php include("../components/secnavbar.php"); ?>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>Message sent</h2>
            </div>
            <div class="row d-flex justify-content-center p-5 q">
                <a href="index.php"><button class="btn btn-primary">Back to message form</button></a>
            </div>
        </div>
        <?php
        include("../layouts/secbodyjs.php");
        ?>
    </body>

    </html>
    <?php  } ?>
<?php } else { ?>
    <html>
    <?php
    include("../layouts/sechead.php");
    ?>

    <body>
        <?php include("../components/secnavbar.php"); ?>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>There is no venuemanager exists with this ID</h2>
            </div>
            <div class="row d-flex justify-content-center p-5 q">
                <a href="index.php"><button class="btn btn-primary">Back to message form</button></a>
            </div>
        </div>
        <?php
        include("../layouts/secbodyjs.php");
        ?>
    </body>

    </html>
<?php
}
?>