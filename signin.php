<?php
session_start();
include("showerrors.php");
?>
<html>
<?php
include("layouts/head.php");
?>

<body>
    <div id="bgVideoDiv">
        <div id="bgVideoOverlay" class="overlay"></div>
        <video id="bgVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4%2FLive-Music.mp4?X-Goog-Algorithm=GOOG4-RSA-SHA256&X-Goog-Credential=coverr-183014%40appspot.gserviceaccount.com%2F20200324%2Fauto%2Fstorage%2Fgoog4_request&X-Goog-Date=20200324T081144Z&X-Goog-Expires=300&X-Goog-SignedHeaders=host&X-Goog-Signature=241b43a05377a2192d457da2cd3d9d210584fb1f0d894c3343242fdb4461b30484da8192aabc232bb3625eb025b4d04f90db4e9b753f47aceb2c2fd0cfc4cbaea8ae00478b96f3a31736cf6c8235e03d12acdfb6a6ec9952bf4df19f8f7527b5e5af99e463769337305bd127eb5b4794e37e60ab7b4928377ffcd18ff578812588fdfe17188ece26a8a814a573c9a989a9f8ed952bbade54c00b83d5f797764939827d54d6b7d97724844d6610dbba2f2911dc37995fe869c7e17a26909597cb814013ceef1a22615ad807d0013ee732dc66c71e7863d688187e2c18d93ecfd36ab23f8cd83ec4ccf88c7834aae0920998a8a247d800cec91f16d9060539da0b" type="video/mp4">
        </video>
        <div id="bgVideoContainer" class="container h-100">
            <div id="signInForm">
                <div>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div id="signInFormPaper">
                            <div class="d-flex justify-content-center text-center pt-3">
                                <h1 class="text-primary pb-4">Login</h1>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="w-75">
                                    <form action='signinprocess.php' method='POST'>
                                        <div class="form-group">
                                            <label class="text-primary"><svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd" />
                                                    <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd" />
                                                    <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z" />
                                                </svg> Email:</label>
                                            <input class="form-control" type="email" name="muser" placeholder="Enter email" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="text-primary"><svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 00-1 1v5a1 1 0 001 1h7a1 1 0 001-1V9a1 1 0 00-1-1zm-7-1a2 2 0 00-2 2v5a2 2 0 002 2h7a2 2 0 002-2V9a2 2 0 00-2-2h-7zm0-3a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
                                                </svg> Password:</label>
                                            <input class="form-control" type="password" name="mpass" placeholder="Enter password" required />
                                        </div>
                                        <div class="d-flex justify-content-center"><input class="btn btn-primary w-50" type="submit" value="Login" name="requestlogin"></div>
                                        <div class="text-center pt-3"><a href="forgetpass.php"><u>Forget password</u></a></div>
                                        <div class="text-primary text-center pt-3">Not user? <a href="register.php"><u>Create an account now</u></a></div>
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
    include("layouts/bodyjs.php");
    ?>
</body>

</html>