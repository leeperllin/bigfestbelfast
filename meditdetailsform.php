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

$readquery = "SELECT * FROM `2020_member` WHERE mid= '$member'  ";

$readresult = $conn->query($readquery);

if (!$readresult) {
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
        <?php
        while ($rowread = $readresult->fetch_assoc()) {

            $rowid = $rowread['mid'];
            $mfirstname = $rowread['mfirstname'];
            $mlastname = $rowread['mlastname'];
            $memail = $rowread['memail'];
        }
        ?>
        <div class="container">
            <div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="w-75">
                        <div class="d-flex justify-content-center text-center pt-3">
                            <h1 class="text-dark pb-4">Edit Details</h1>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="w-75">
                                <form action='meditdetailsprocess.php' method='POST'>
                                    <input type='hidden' value='<?php echo $member; ?>' name='editid' />
                                    <div class="form-group">
                                        <label class="text-dark">First Name:</label>
                                        <input class="form-control" type='text' placeholder='<?php echo $mfirstname; ?>' name='Newmfirstname' size='30' required />
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark">Last Name:</label>
                                        <input class="form-control" type='text' placeholder='<?php echo $mlastname; ?>' name='Newmlastname' size='30' required>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark">Email:</label>
                                        <input class="form-control" type='email' placeholder='<?php echo $memail; ?>' name='Newmemail' size='30' required>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input class="btn btn-primary w-50" type="submit" value="Confirm Edit" name='requestedit'>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>