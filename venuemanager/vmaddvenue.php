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
        <div class="d-flex justify-content-center text-center pt-3">
            <h2 class="display-4 text-info p-1">Add Venue</h2>
        </div>
        <form action='vmaddvenueprocess.php' method='POST'>
            <div class="form-group">
                <label class="text-info"><b>Venue Name:</b></label>
                <input class="form-control" type='text' name='newvenuecat' id='newvenuecat' required />
            </div>
            <div class="form-group">
                <label class="text-info"><b>Venue Address:</b></label>
                <input class="form-control" type='text' name='newaddresscat' id='newaddresscat' required />
            </div>
            <div class="d-flex justify-content-center"><input class="btn btn-info" type='submit' value='Upload New Venue' name='uploadvenue'></div>


        </form>
    </div>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>

</body>

</html>