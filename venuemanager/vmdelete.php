<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['VMname_40245529'])) {
    header("Location: vmsignin.php");
}

$readquery = "SELECT 2020_event.ecatid,
              2020_eventcat.etname, 2020_venuemanager.vmname FROM 2020_event
              INNER JOIN 2020_eventcat
              ON
              2020_event.ecatid= 2020_eventcat.etid
              INNER JOIN 2020_venuemanager
              ON
              2020_event.evmid= 2020_venuemanager.vmid
              GROUP BY 2020_eventcat.etname";

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
    <div id="vmDeleteDiv">
        <div class="text-center pt-5">
            <h1 class="display-2 text-info">Delete Events</h1>
        </div>
        <div class="d-flex h-50 align-items-center justify-content-center">
            <div class="container text-center">
                <div class="row">
                    <?php
                    while ($rowread = $readresult->fetch_assoc()) {
                        $categoryid = $rowread['ecatid'];
                        $categoryname = $rowread['etname'];
                    ?>
                        <div class="col-4">
                            <a href='vmdelete2.php?deletecatid=<?php echo $categoryid; ?>' class="text-info">
                                <h1 class="display-1">
                                    <?php if ($categoryid == 1) { ?>
                                        <svg class="bi bi-music-note-beamed" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z" />
                                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z" clip-rule="evenodd" />
                                            <path d="M5 2.905a1 1 0 01.9-.995l8-.8a1 1 0 011.1.995V3L5 4V2.905z" />
                                        </svg>
                                    <?php } ?>
                                    <?php if ($categoryid == 2) { ?>
                                        <svg class="bi bi-speaker" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 4a1 1 0 11-2 0 1 1 0 012 0zm-2.5 6.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                            <path fill-rule="evenodd" d="M4 0a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V2a2 2 0 00-2-2H4zm6 4a2 2 0 11-4 0 2 2 0 014 0zM8 7a3.5 3.5 0 100 7 3.5 3.5 0 000-7z" clip-rule="evenodd" />
                                        </svg>
                                    <?php } ?>
                                    <?php if ($categoryid == 3) { ?>
                                        <svg class="bi bi-tv" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 013 13h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zM13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 00-.254.302A1.46 1.46 0 001 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 00.538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 00.254-.302 1.464 1.464 0 00.143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 00-.302-.254A1.46 1.46 0 0013.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" clip-rule="evenodd" />
                                        </svg>
                                    <?php } ?>
                                </h1>
                                <h2><?php echo $categoryname; ?></h2>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
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