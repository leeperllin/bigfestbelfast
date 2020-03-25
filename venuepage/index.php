<?php
session_start();
include("../showerrors.php");
include("../conn.php");
//call event information
//$readquery = "SELECT 2020_event.eid, 2020_event.eaddress, 2020_venuecat.vid, 2020_venuecat.vname FROM 2020_event INNER JOIN 2020_venuecat ON 2020_event.evenueid= 2020_venuecat.vid";
$readquery1 = "SELECT * FROM 2020_venuecat GROUP BY vname";
$readresult1 = $conn->query($readquery1);

if (!$readresult1) {
    echo $conn->error;
}
?>
<html>
<?php
include("../layouts/head.php");
?>

<body>
    <?php include("../components/secnavbar.php"); ?>
    <div class="d-flex justify-content-center display-4 p-2">Venue</div>
    <div class="container">
        <?php
        while ($rowread1 = $readresult1->fetch_assoc()) {
            $Venueid = $rowread1['vid'];
            $Eeventvenue = $rowread1['vname'];
        ?>
            <div class="card">
                <div class="card-body">
                    <?php echo $Eeventvenue; ?> <a href='venuecategory.php?venuecat=<?php echo $Venueid; ?>'> More Show </a> <br>
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <?php
    include("../layouts/bodyjs.php");
    ?>
</body>

</html>