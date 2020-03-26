<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

echo "$member";

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

    echo "$bookingquery";
    if (!$bookingresult) {

        echo $conn->error;
    } else {

        echo "Booking Sucessfully";
        echo "<a href='../index.php'>Back to Home Page </a>";
    }
} else {
    echo "You already have booked this event before";
    echo "<a href='index.php'>Book other shows</a>";
}
