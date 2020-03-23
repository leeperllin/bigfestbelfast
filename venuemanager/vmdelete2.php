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

$Deletecatid = $_GET['deletecatid'];

$readquery = "SELECT 2020_event.etitle, 2020_event.eimage,2020_event.eid
              FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.ecatid ='$Deletecatid' AND 2020_event.evmid='$venuemanager' ";


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
    <div id="vmEdit2Div" class="container">
        <div class="d-flex text-align-center pt-3">
            <h1>Delete event </h1>
        </div>
        <div class="row">
            <?php
            while ($rowread = $readresult->fetch_assoc()) {
                $Eventid = $rowread['eid'];
                $Eventtitle = $rowread['etitle'];
                $Eventimage = $rowread['eimage'];
            ?>
                <div class="col-4 p-3">
                    <a class="text-info" href='vmdelete3.php?deleteeventid=<?php echo $Eventid ?>'>
                        <div class="card border-info">
                            <img class="card-img-top" src="../image/<?php echo $Eventimage ?>" alt="Card image cap" height="200px" width="200px">
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center p-3">
                                    <h3 class="card-text"><?php echo $Eventtitle ?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include("../venuemanager/components/footer.php")
    ?>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>
</body>

</html>