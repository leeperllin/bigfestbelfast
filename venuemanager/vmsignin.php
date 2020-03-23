<?php
session_start();
include("../showerrors.php");
?>

<html>
<?php
include("../layouts/venuemanager/head.php");
?>

<body>
    <div id="vmBgVideoDiv">
        <div id="vmBgVideoOverlay" class="overlay"></div>
        <video id="vmBgVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="../image/vmBgVideo.mp4" type="video/mp4">
        </video>
        <div id="vmBgVideoContainer" class="container h-100">
            <div id="vmSignInForm">
                <div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div id="vmSignInFormPaper">
                            <div class="d-flex justify-content-center text-center pt-3">
                                <h1 class="text-info pb-4">Venue Manager Login Page</h1>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="w-75">
                                    <form action='vmsigninprocess.php' method='POST'>
                                        <div class="form-group">
                                            <label class="text-info"><svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z" />
                                                    <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                                    <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd" />
                                                </svg> ID Name:</label>
                                            <input class="form-control" type="text" name="vmuser" placeholder="Enter ID" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info"><svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 00-1 1v5a1 1 0 001 1h7a1 1 0 001-1V9a1 1 0 00-1-1zm-7-1a2 2 0 00-2 2v5a2 2 0 002 2h7a2 2 0 002-2V9a2 2 0 00-2-2h-7zm0-3a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
                                                </svg> Password:</label>
                                            <input class="form-control" type="password" name="vmpassword" placeholder="Enter password" required />
                                        </div>
                                        <div class="d-flex justify-content-center p-2"><input class="btn btn-info w-50" type="submit" value="Login" name="requestvmlogin"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../layouts/venuemanager/bodyjs.php");
    ?>
</body>

</html>