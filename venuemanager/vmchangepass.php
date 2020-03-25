<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMname_40245529'])) {
    $venuemanagername = $_SESSION['VMname_40245529'];
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

    <div id="vmChangePassForm">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div id="vmChangePassFormPaper">
                <div class="d-flex justify-content-center text-center pt-3">
                    <h1 class="display-4 text-info pb-5">Change Password</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="w-75">
                        <form action='vmchangepassprocess.php' method='POST'>
                            <input type='hidden' value='<?php echo $venuemanager ?>' name='venuemangerid' />
                            <div class="form-group">
                                <label class="text-info"><b>ID Name:</b></label>
                                <input class="form-control" type='text' value='<?php echo $venuemanagername ?> 'name='vmidname' id='vmidname' disabled/>
                            </div>
                            <div class="form-group">
                                <label class="text-info"><b>Old Password:</b></label>
                                <input class="form-control" type='password' name='vmopwd' id='vmopwd' required />
                            </div>
                            <div class="form-group">
                                <label class="text-info"><b>New Password:</b></label>
                                <input class="form-control" type='password' name='vmnpwd' id='vmnpwd' required />
                            </div>
                            <div class="form-group">
                                <label class="text-info"><b>Confirm Password:</b></label>
                                <input class="form-control" type='password' name='vmcpwd' id='vmcpwd' required />
                            </div>
                            <div class="d-flex justify-content-center">
                                <input class="btn btn-info" type='submit' value='Change Password' name='vmchangepassword'>
                            </div>
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

</body>

</html>