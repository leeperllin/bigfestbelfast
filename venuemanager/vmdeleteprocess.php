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

$Deleteeventid3 = $_POST['deleteEid'];

$deletequery = "DELETE FROM `2020_event` WHERE eid='$Deleteeventid3' ";

$deleteresult = $conn->query($deletequery);

if (!$deleteresult) {
    echo $conn->error;
}

?>
<html>
<?php
include("../layouts/venuemanager/head.php");
?>

<body>
    <?php include("../venuemanager/components/navbar.php") ?>
    <div class="container justify-content-center">
        <div class="d-flex justify-content-center p-5">
            <h5 class="text-info">The event has been deleted successfully!</h5>
        </div>
        <div class="d-flex justify-content-center p-5">
            <a href="vmdelete.php">
                <div class="btn btn-info m-1">Back to Delete Page</div>
            </a>
            </a>
        </div>
    </div>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>
</body>

</html>