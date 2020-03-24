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


$Deleteeventid2 = $_GET['deleteeventid'];


$readquery = "SELECT 2020_event.etitle, 2020_event.eimage,2020_event.eid
              FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.eid='$Deleteeventid2' AND 2020_event.evmid='$venuemanager' ";


$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>
<html>
<?php
include("../layouts/venuemanager/head.php");
?>

<body>
    <?php include("../venuemanager/components/navbar.php") ?>
    <div id="vmDelete2Div" class="container">
        <div class="d-flex justify-content-center text-align-center p-5">
            <div>
                <h3 class="text-danger">Are you sure you want to delete this event?</h3>
                <p class="text-warning">Once event is deleted it will be gone.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                //help me built one more button to with value = 'NO' and it can go back to the previous page, if u know help me built    
                while ($rowread = $readresult->fetch_assoc()) {
                    $deleteid = $rowread['eid'];
                    $deletitle = $rowread['etitle'];
                    $deleimage = $rowread['eimage'];
                } ?>
                <form action='vmdeleteprocess.php' method='POST'>
                    <div class="row justify-content-center">
                        <img class="rounded" src='../image/<?php echo $deleimage; ?>' width="400px" />
                    </div>
                    <div class="row justify-content-center p-2">
                        <h3 class="text-info"><?php echo $deletitle; ?></h3>
                    </div>
                    <div class="row justify-content-center p-2">
                        <input type='hidden' name='deleteEid' value='<?php echo $deleteid; ?>'>
                        <input class="btn btn-danger w-25" type='submit' value='YES' name='deleteevent'>
                    </div>
                </form>
                <div class="row justify-content-center p-1">
                    <button class="btn btn-secondary w-25" onclick="window.history.back()">No</button>
                </div>
            </div>
        </div>
    </div>
    <?php include("../venuemanager/components/footer.php") ?>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>
</body>

</html>