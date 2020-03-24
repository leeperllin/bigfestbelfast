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
    <div class="overflow-auto h-100">
        <?php
        include("../venuemanager/components/navbar.php")
        ?>
        <div id="vmUploadForm">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div id="vmUploadFormPaper" class="m-3">
                    <div class="d-flex justify-content-center text-center pt-3">
                        <h2 class="display-4 text-info p-1">Upload Events</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="w-75">
                            <form enctype='multipart/form-data' action='vmuploadprocess.php' method='POST'>
                                <input type='hidden' value='<?php echo $venuemanager ?>' name='venuemangerid' />
                                <div class="form-group">
                                    <label class="text-info"><b>Event Title:</b></label>
                                    <input class="form-control" type='text' name='newetitle' id='newetitle' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Address:</b></label>
                                    <input class="form-control" type='text' name='neweaddress' id='neweaddress' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Date:</b></label>
                                    <input class="form-control" type='date' name='newedate' id='newedate' min="2020-01-01" max="2025-12-31" required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Time:</b></label>
                                    <input class="form-control" type='time' name='newetime' id='newetime' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Category:</b></label>
                                    <select class="form-control" name='newecat' id='newecat' required>
                                        <?php
                                        //show all option
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
                                    <textarea class="form-control" type='text' name='newedes' id='newedes' rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-info"><b>Event Images:</b></label>
                                    <input class="form-control-file btn btn-info" name='neweimage' id='neweimage' type='file' required />
                                </div>
                                <div class="d-flex justify-content-center"><input class="btn btn-info" type='submit' value='Upload New Event' name='uploadevent'></div>
                            </form>
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
    </div>
</body>

</html>