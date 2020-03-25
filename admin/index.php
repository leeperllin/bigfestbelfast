<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['ADname_40245529'])) {
    header("Location: adsignin.php");
}
if (isset($_SESSION['ADid_40245529'])) {
    $admin = $_SESSION['ADid_40245529'];
}

$readquery = "SELECT * FROM 2020_member ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}

?>

<html>
<?php
include("../layouts/admin/head.php")
?>

<body>
    <?php
    include("../admin/components/navbar.php")
    ?>
    <div class="d-flex justify-content-center">
        <h1 class="display-4 text-primary p-2">User Details</h1>
    </div>
    <div class="container">
        <div class="row ">
            <?php
            while ($rowread = $readresult->fetch_assoc()) {
                $adrowid = $rowread['mid'];
                $admfirstname = $rowread['mfirstname'];
                $admlastname = $rowread['mlastname'];
                $admemail = $rowread['memail'];
                $admpass = $rowread['mpass']; ?>
                <div class="col-4 p-3">
                    <div class="card rounded border-primary m-3">
                        <div class="card-body">
                            <div><b class="text-primary">ID:</b> <?php echo $adrowid; ?> </div>
                            <div><b class="text-primary">Name:</b> <?php echo $admlastname . " " . $admfirstname; ?> </div>
                            <div><b class="text-primary">Email:</b> <?php echo $admemail; ?> </div>
                            <div><b class="text-primary">Password:</b> <?php echo $admpass; ?> </div>
                        </div>
                        <div class="btn btn-danger rounded-0"><a class="text-light" href='addelete.php?deletemember=<?php echo $adrowid; ?>'>Delete this account</a></div>
                        <div class="btn btn-primary rounded-0"><a class="text-light" href='adresetpass.php?resetmember=<?php echo $adrowid; ?>'>Reset Password</a></div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include("../layouts/admin/bodyjs.php")
    ?>
</body>

</html>