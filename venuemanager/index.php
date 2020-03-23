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


$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.evenue, 2020_event.edes, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_venuemanager.vmid = '$venuemanager'";


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
    <?php
    include("../venuemanager/components/navbar.php")
    ?>
    <div class="container">
        <div class="row">
            <?php
            while ($rowread = $readresult->fetch_assoc()) {

                $eventid = $rowread['eid'];
                $eventtitle = $rowread['etitle'];
                $eventvenue = $rowread['evenue'];
                $eventdes = $rowread['edes'];
                $eventdate = $rowread['edate'];
                $eventtime = $rowread['etime'];
                $eventimage = $rowread['eimage'];
                $eventcategory = $rowread['etname'];
                $venuemanagername = $rowread['vmname'];
            ?>
                <div class="col-4 p-3">
                    <div class="card border-info">
                        <div class="text-center p-2">
                            <h5 class="card-title"><?php echo $eventtitle ?></h5>
                        </div>
                        <img class="card-img-top" src="<?php echo "../image/$eventimage" ?>" alt="Card image cap" height="200px" width="200px">
                        <div class="card-body">
                            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <p class="card-text">Event Title: <b><?php echo $eventtitle ?></b></p>
                            <p class="card-text">Event Venue: <b><?php echo $eventvenue ?></b></p>
                            <p class="card-text">Event Date: <b><?php echo $eventdate ?></b></p>
                            <p class="card-text">Event Time: <b><?php echo $eventtime ?></b></p>
                            <p class="card-text">Event Category: <b><?php echo $eventcategory ?></b></p>
                            <p class="card-text mb-0">Event Description:</p>
                            <p><b><?php echo $eventdes ?></b></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
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