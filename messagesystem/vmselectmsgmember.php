<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
} 

echo "$venuemanager";

?>

<?php
$memberquery = "SELECT * FROM 2020_member";

$memberresult = $conn->query($memberquery);

if (!$memberresult) {
    echo $conn->error;
}

while ($rowread = $memberresult->fetch_assoc()) {

    $msgmemberid = $rowread['mid'];

    echo"<a href='vmmessagebox.php?msgmid=$msgmemberid'>$msgmemberid</a><br>";
    
}