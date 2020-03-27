<?php
session_start();

include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}


$Ebookingid = $_GET['ebookingid'];

$readquery = "SELECT beventid FROM 2020_booking WHERE bmemberid='$member'";
$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

while ($rowread = $readresult->fetch_assoc()) {
    $Beventid = $rowread['beventid'];
}

if ($Beventid !== $Ebookingid) {

    $bookingquery = "INSERT INTO 2020_booking (beventid,bmemberid) VALUES ('$Ebookingid','$member')";
    $bookingresult = $conn->query($bookingquery);


    if (!$bookingresult) {

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
                    <h2>Booking Sucessfully!</h2>
                </div>
                <div class="row d-flex justify-content-center p-5 ">
                    <a href='../index.php'><button class="btn btn-primary">Back to Home Page</button></a>
                </div>
            </div>
            <?php
            include("../layouts/secbodyjs.php");
            ?>
        </body>

        </html>
    <?php   } ?>
<?php } else { ?>
    <html>
    <?php
    include("../layouts/sechead.php");
    ?>

    <body>
        <?php include("../components/secnavbar.php"); ?>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>You already have booked this event before</h2>
            </div>
            <div class="row d-flex justify-content-center p-5 ">
                <a href='index.php'><button class="btn btn-primary">Book other shows</button></a>
            </div>
        </div>
        <?php
        include("../layouts/secbodyjs.php");
        ?>
    </body>

    </html>
<?php } ?>