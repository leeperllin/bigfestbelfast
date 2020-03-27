<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}

// echo "$venuemanager";

//$messagemember= $_GET['sentoid'];
$messagemember = $_GET['msgmid'];


?>


<?php
$readquery = "SELECT * FROM 2020_message WHERE receiver='$venuemanager' AND sender='$messagemember'";


$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
} else { ?>

    <html>
    <?php
    include("../layouts/venuemanager/head.php");
    ?>

    <body>
        <?php include("../venuemanager/components/secnavbar.php") ?>
        <div class="container justify-content-center">
            <div class="d-flex justify-content-center p-5">
                <h5 class="text-info">Inbox</h5>
            </div>
            <?php
            while ($rowread = $readresult->fetch_assoc()) {
                $isend = $rowread['sender'];
                $isendname = $rowread['sendername'];
                $msgcontent = $rowread['msgcontent'];

                if ($isend !== $venuemanager) { ?>
                    <p>Sent from <b class="text-primary"><?php echo $isendname; ?></b>: <b><?php echo $msgcontent; ?></b></p>


            <?php
                }
            } ?>
        </div>
        <?php
        include("../layouts/venuemanager/bodyjs.php");
        ?>
    </body>

    </html>
<?php }
?>