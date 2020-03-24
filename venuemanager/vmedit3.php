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


$Eventid2 = $_GET['eventid'];

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.eaddress, 2020_event.edes, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              WHERE 2020_event.eid='$Eventid2'";


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
    <?php
    while ($row2 = $readresult->fetch_assoc()) {
        $valuetitle = $row2['etitle'];
        $valueaddress = $row2['eaddress'];
        $valuedes = $row2['edes'];
        $valuedate = $row2['edate'];
        $valuetime = $row2['etime'];
    }
    ?>
    <div id="vmEdit3Form">
        <div id="vmEdit3FormDiv">
            <div class="d-flex justify-content-center">
                <div id="vmEdit3FormPaper">
                    <div class="d-flex justify-content-center text-center pt-3">
                        <h1 class="display-4 text-info pb-5">Edit Event</h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="w-75">
                            <form enctype='multipart/form-data' action='vmeditprocess.php' method='POST'>
                                <input type='hidden' value='<?php echo $Eventid2; ?>' name='vmeditid' />
                                <div class="form-group">
                                    <label class="text-info"><b>Event Title:</b></label>
                                    <input class="form-control" type='text' value='<?php echo $valuetitle; ?>' name='Neweventtitle' id='Neweventtitle' size='30' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Address:</b></label>
                                    <input class="form-control" type='text' value='<?php echo $valueaddress; ?>' name='Neweventaddress' id='Neweventaddress' size='30' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Date:</b></label>
                                    <input class="form-control" type='date' value='<?php echo $valuedate; ?>' name='Neweventdate' id='Neweventdate' min="2020-01-01" max="2025-12-31" required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Time:</b></label>
                                    <input class="form-control" type='time' value='<?php echo $valuetime; ?>' name='Neweventtime' id='Neweventtime' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Category:</b></label>
                                    <select class="form-control" name='Newcatevent' required>
                                        <?php
                                        //for showing the option select
                                        $showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
                                        $showoptionresult = $conn->query($showoptionquery);

                                        echo "<option value=''>Choose Category</option> ";

                                        while ($row = $showoptionresult->fetch_assoc()) {
                                            $catname = $row['etname'];
                                            $catid = $row['etid'];

                                            echo "<option value='$catid'>$catname</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Description:</b></label>
                                    <textarea class="form-control" type='text' name='Neweventdescription' id='Neweventdescription' rows="5" required><?php echo $valuedes; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Images:</b></label>
                                    <input class="form-control-file btn btn-info" name='Neweventimage' id='Neweventimage' type='file' />
                                </div>
                                <div class="d-flex justify-content-center"><input class="btn btn-info" type='submit' value='Edit Event' name='requesteditevent'></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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