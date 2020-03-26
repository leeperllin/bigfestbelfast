<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
}

$showbookingquery = "SELECT 2020_booking.bid, 2020_event.eid, 2020_event.etitle, 2020_event.edate, 2020_event.etime, 2020_event.eimage, 2020_venuecat.vaddress
              FROM 2020_event
              INNER JOIN 2020_booking
              ON
              2020_event.eid= 2020_booking.beventid
              INNER JOIN 2020_venuecat
              ON
              2020_event.evenueid= 2020_venuecat.vid
              WHERE 2020_booking.bmemberid= $member ";

$showbookingresult = $conn->query($showbookingquery);

if (!$showbookingresult) {
    echo $conn->error;
}


?>
<html>
<?php
include("layouts/head.php");
?>

<body>
    <?php include("components/navbar.php") ?>
    <?php include("components/sidenav.php") ?>
    <div class="main">
        <div class="container-fluid">
            <div class="d-flex justify-content-center text-center pt-3">
                <h1>My Booking</h1>
            </div>
            <?php
            while ($rowread = $showbookingresult->fetch_assoc()) {

                $Bookingid = $rowread['bid'];
                $Eeventtitle = $rowread['etitle'];
                $Eeventaddress = $rowread['vaddress'];
                $Eeventdate = $rowread['edate'];
                $Eeventtime = $rowread['etime'];
                $Eeventimage = $rowread['eimage']; ?>

                <!-- 
            echo "<img src='image/$Eeventimage' <br>";
            echo "<p>Event Title: $Eeventtitle </p> ";
            -->
                <div class="border rounded border-secondary m-3">
                    <div class="card bg-dark">
                        <img class="card-img-top myBookingCardImage" src='image/<?php echo $Eeventimage; ?>' alt="Card image cap">
                        <div class="card-img-overlay text-light">
                            <h1 class="card-title"><?php echo $Eeventtitle; ?></h1>
                            <p>Event Address: <?php echo $Eeventaddress; ?> </p>
                            <p>Event Date: <?php echo $Eeventdate; ?> </p>
                            <p>Event Time: <?php echo $Eeventtime; ?> </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href='eventpage/eventdetails.php?eventdetailsid=104'>Event Details</a>
                        <a class="btn btn-danger" href='mybookingcancel.php?bookingcancel=<?php echo $Bookingid; ?>'>Cancel Booking</a>
                        <a class="btn btn-warning" href='mybookingdownload.php?bookingdownload=<?php echo $Bookingid; ?>'>Download pdf Ticket</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>