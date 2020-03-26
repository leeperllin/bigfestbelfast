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
    <div class="d-flex justify-content-center text-center pt-3">
            <h2 class="display-4 text-info p-1">Add Event Category</h2>
        </div>
    <div class="container">
        <form action='vmaddeventcatprocess.php' method='POST'>
            <div class="form-group">
                <label class="text-info"><b>Event Category:</b></label>
                <input class="form-control" type='text' name='newcatname' id='newcatname' required />
            </div>


            <div class="d-flex justify-content-center"><input class="btn btn-info" type='submit' value='Upload New Category' name='uploadcategory'></div>

    </div>




    </form>
    </div>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>
</body>

</html>