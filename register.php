<?php
session_start();
include("showerrors.php");
if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}
?>
<html>
<?php
include("layouts/head.php");
?>

<body>
    <div id="registerForm">
        <div id="registerFormDiv">
            <div class="d-flex justify-content-center">
                <div id="registerFormPaper">
                    <div class="d-flex justify-content-center pt-3">
                        <h1 class="text-primary pb-4">Create a new account</h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="w-75">
                            <form action='registerprocess.php' method='POST'>
                                <div class="form-group">
                                    <label class="text-primary">First Name: </label>
                                    <input class="form-control" type="text" name="mfirstname" placeholder="Enter first name" required />
                                </div>
                                <div class="form-group">
                                    <label class="text-primary">Last Name: </label>
                                    <input class="form-control" type="text" name="mlastname" placeholder="Enter last name" required />
                                </div>
                                <div class="form-group">
                                    <label class="text-primary"><svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd" />
                                            <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z" />
                                        </svg> Email:</label>
                                    <input class="form-control" type="email" name="mnewemail" placeholder="Enter email" required />
                                </div>
                                <div class="form-group">
                                    <label class="text-primary"><svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 00-1 1v5a1 1 0 001 1h7a1 1 0 001-1V9a1 1 0 00-1-1zm-7-1a2 2 0 00-2 2v5a2 2 0 002 2h7a2 2 0 002-2V9a2 2 0 00-2-2h-7zm0-3a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
                                        </svg> Password:</label>
                                    <input class="form-control" type="password" name="mnewpass" placeholder="Enter password" required />
                                </div>
                                <!-- SECURITY QUESTION -->
                                <div class="form-group">
                                    <label class="text-primary">Security Question:</label>
                                    <select class="form-control" name="">
                                        <option value="What is your dog's name?">What is your dog's name?</option>
                                        <option value="What were the last four digits of your childhood telephone number?">What were the last four digits of your childhood telephone number?</option>
                                        <option value="What primary school did you attend?">What primary school did you attend?</option>
                                    </select>
                                </div>
                                <!-- ANSWER -->
                                <div class="form-group">
                                    <label class="text-primary">Answer:</label>
                                    <input class="form-control" type="text" name="" placeholder="Enter your answer" required />
                                </div>
                                <div class="d-flex justify-content-center"><input class="btn btn-primary w-50" type="submit" value="Register" name="registeracc"></div>
                                <!-- <div class="text-center pt-3"><a href="changepass.php">Forget password </a></div> -->
                                <div class="text-primary text-center pt-3">Already have an account? <a href="signin.php" class="text-primary"><u>Login here</u></a></div>
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