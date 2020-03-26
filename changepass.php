<?php
session_start();
include("showerrors.php");
include("conn.php");

if (isset($_SESSION['username_40245529'])) {
    $membername = $_SESSION['username_40245529'];
}
?>
<html>
<?php
include("layouts/head.php");
?>

<body>
    <?php include("components/navbar.php") ?>
    <div class="container">
        <div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="w-75">
                    <div class="d-flex justify-content-center text-center pt-3">
                        <h1 class="text-dark pb-4">Change Password</h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="w-75">
                            <form action='changepassprocess.php' method='POST'>
                                <div class="form-group">
                                    <label class="text-dark">Email:</label>
                                    <input class="form-control" type='email' value='<?php echo $membername; ?>' name='email' id='email' disabled />
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Old Password:</label>
                                    <input id='opwd' class="form-control" type='password' placeholder='Enter Old Password' name='opwd' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">New Password:</label>
                                    <input id='npwd' class="form-control" type='password' placeholder='Enter New Password' name='npwd' required />
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Confirm Password: </label>
                                    <input id='cpwd' class="form-control" type='password' placeholder='Enter Confirm Password' name='cpwd' required />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input class="btn btn-primary w-50" type="submit" value='Change Password' name='changepassword' />
                                </div>
                            </form>
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