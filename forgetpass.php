<?php
session_start();
include("showerrors.php");
include("conn.php");
?>
<html>
<?php
include("layouts/head.php");
?>

<body>
    <div id="bgVideoDiv">
        <div id="bgVideoOverlay" class="overlay"></div>
        <video id="bgVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://cdn.videvo.net/videvo_files/video/free/2020-03/small_watermarked/200107_02_String%20Quartet_4k_018_preview.webm" type="video/mp4">
        </video>
        <div id="bgVideoContainer">
            <?php include("components/navbar.php"); ?>
            <div class="container">
                <div id="forgetPassForm">
                    <div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div id="forgetPassFormPaper" class="m-1">
                                <div class="d-flex justify-content-center text-center pt-3">
                                    <h1 class="text-primary pb-4">Forget Password</h1>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="w-75">
                                        <form action='forgetpassprocess.php' method='POST'>
                                            <div class="form-group">
                                                <label class="text-primary">Email:</label>
                                                <input id='memberemail' class="form-control" type="email" name="memberemail" placeholder="Enter email" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="text-primary">Security Question:</label>
                                                <select class="form-control" name="membersq">
                                                    <option value="What is your dog name?">What is your dog name?</option>
                                                    <option value="What were the last four digits of your telephone number?">What were the last four digits of your telephone number?</option>
                                                    <option value="What primary school did you attend?">What primary school did you attend?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-primary">Security Answer:</label>
                                                <input id='membersa' class="form-control" type="text" name="membersa" placeholder="Enter your answer" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="text-primary">New Password:</label>
                                                <input id='membernpwd' class="form-control" type="password" name="membernpwd" placeholder="Enter password" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="text-primary">Confirm Password:</label>
                                                <input id='membercpwd' class="form-control" type="password" name="membercpwd" placeholder="Enter password" required />
                                            </div>
                                            <div class="d-flex justify-content-center"><input class="btn btn-primary w-50" type="submit" value="Change Password" name="changeforgetpassword"></div>

                                            <div class="text-primary text-center pt-3"><a href="signin.php" class="text-primary"><u>Back to Sign In</u></a></div>
                                            <div class="text-primary text-center pt-3"><a href="register.php" class="text-primary"><u>Register a new account</u></a></div>
                                        </form>
                                    </div>
                                </div>
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