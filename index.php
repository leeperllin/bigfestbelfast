<?php
session_start();
include("showerrors.php");
include("conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

echo "$member";

$readquery = "SELECT * FROM `2020_member`WHERE mid='$member' ";

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
    <p>Hi world!</p>
    <a href="index.php">Home</a>
    <a href="eventpage/index.php">All Event</a>
    <?php
    //for showing all category in the All Event , do css with option select

    $showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
    $showoptionresult = $conn->query($showoptionquery);



    while ($row = $showoptionresult->fetch_assoc()) {
        $catname = $row['etname'];
        $catid = $row['etid'];
        echo"<a href='eventpage/eventcategory.php?eventcategory=$catid'>$catname</a>";
    }
    ?>
    <a href="venuepage/index.php">Venue</a>
    <a href="supportpage/index.php">Support Us</a>
    <?php
    while ($rowread = $readresult->fetch_assoc()) {

        $rowid = $rowread['mid'];
        $mfirstname = $rowread['mfirstname'];
        $mlastname = $rowread['mlastname'];
        $memail = $rowread['memail'];
        $mpass = $rowread['mpass'];
    }
    
    if($member!=="guest"){
    echo "<a href='mydetails.php?memberid=$rowid'>My Profile</a>";
    echo "<a href='myinbox.php'>Inbox</a>";
    echo "<a href='changepass.php'>Change Password</a>";
    echo "<a href='logout.php'>Logout</a>";
    
    
    }else{
     echo "<a href='signin.php'>Sign In</a>";
    }
    
    ?>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>