<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}

?>

<?php
$memberquery = "SELECT * FROM 2020_member";

$memberresult = $conn->query($memberquery);

if (!$memberresult) {
    echo $conn->error;
} ?>
<html>
<?php
include("../layouts/venuemanager/head.php");
?>

<body>
    <?php include("../venuemanager/components/secnavbar.php") ?>
    <div class="container justify-content-center">
        <div class="d-flex justify-content-center p-5">
            <h5 class="text-info">Select member ID</h5>
        </div>
        <?php while ($rowread = $memberresult->fetch_assoc()) {

            $msgmemberid = $rowread['mid']; ?>
            <div class="row d-flex justify-content-center p-1">
                <a class="btn btn-info" href='vmmessagebox.php?msgmid=<?php echo $msgmemberid; ?>'><?php echo $msgmemberid; ?></a><br>
            </div>
        <?php } ?>

    </div>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>
</body>

</html>