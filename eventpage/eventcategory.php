<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$allcatevent = $_GET['eventcategory'];

$readquery = "SELECT 2020_event.eid, 2020_event.etitle, 2020_event.edes, 2020_event.edate, 2020_event.etime, 2020_event.eimage,
              2020_eventcat.etname, 2020_venuemanager.vmname, 2020_venuecat.vname, 2020_venuecat.vid, 2020_venuecat.vaddress FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuecat
              ON
              2020_venuecat.vid = 2020_event.evenueid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              
              WHERE 2020_event.ecatid ='$allcatevent'";


$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>

<html>
<?php
include("../layouts/sechead.php");
?>

<body>
    <?php include("../components/secnavbar.php"); ?>
    <div class="container-fluid">
        <?php
        $showoptionquery4 = "SELECT * FROM 2020_eventcat WHERE etid = $allcatevent ";
        $showoptionresult4 = $conn->query($showoptionquery4);
        while ($row4 = $showoptionresult4->fetch_assoc()) {
            $navcatname4 = $row4['etname'];
            $navcatid4 = $row4['etid'];
        ?>
            
        <div class="row"><div class="col-12"><h1 id="eventCategoryTitle" class="m-3"><?php echo $navcatname4; ?></h1></div></div><?php } ?>
        <?php
        while ($rowread = $readresult->fetch_assoc()) {

            $Eeventid = $rowread['eid'];
            $Eeventtitle = $rowread['etitle'];
            $Eeventaddress = $rowread['vaddress'];

            $Eeventdate = $rowread['edate'];
            $Eeventtime = $rowread['etime'];
            $Eeventimage = $rowread['eimage'];
            $Eeventcategory = $rowread['etname'];
            $Evenuemanagername = $rowread['vmname'];
        ?>
            <div class="card bg-dark text-white m-3 ">
                <img class="eventCategoryCardImage" src="../image/<?php echo $Eeventimage; ?>" alt="<?php echo $Eeventimage; ?>">
                <div class="card-img-overlay ">
                    <div class="row">
                        <div class="col-6">
                            <div class="row d-flex h-100 justify-content-center align-items-center">
                                <a class="text-light" href='eventdetails.php?eventdetailsid=<?php echo $Eeventid; ?>'>
                                    <h1 class="m-0 eventCategoryCardTitle"><i><?php echo $Eeventtitle; ?></i></h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <h5 class="text-primary">Address: <i class="text-light"><?php echo $Eeventaddress; ?></i></h5>
                            </div>
                            <div class="row">
                                <h5 class="text-primary">Date: <i class="text-light"><?php echo $Eeventdate; ?></i></h5>
                            </div>
                            <div class="row">
                                <h5 class="text-primary">Time: <i class="text-light"><?php echo $Eeventtime; ?></i></h5>
                            </div>
                            <div class="row"><a class="btn btn-primary" href='eventdetails.php?eventdetailsid=<?php echo $Eeventid; ?>'>More Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
    <?php
    include("../layouts/secbodyjs.php");
    ?>
</body>

</html>