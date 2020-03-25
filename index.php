<?php
session_start();
include("showerrors.php");
include("conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

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
    <?php include("components/navbar.php") ?>

    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>