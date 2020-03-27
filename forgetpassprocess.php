<?php
session_start();
include("showerrors.php");
include("conn.php");

$Mmail = $_POST['memberemail'];
$Msq = $_POST['membersq'];
$Msa = $_POST['membersa'];
$Mnpwd = $_POST['membernpwd'];
$Mcpwd = $_POST['membercpwd'];

if ($Mnpwd == $Mcpwd) {
    $selectquery = "SELECT memail, mquestion, manswer FROM `2020_member` WHERE memail='$Mmail' AND mquestion= '$Msq' AND manswer='$Msa'";

    $selectresult = $conn->query($selectquery);
    $numrows = $selectresult->num_rows;

    if ($numrows > 0) {

        $changeforpassquery = "UPDATE 2020_member set mpass='$Mnpwd' WHERE memail='$Mmail' AND mquestion= '$Msq' AND manswer='$Msa'";
        $changeforpassresult = $conn->query($changeforpassquery); ?>

        <!-- echo "<p>Password Changed</p>"; -->
        <!-- echo "<p><a href=signin.php>Back to Sign in Page</a></p>"; -->
        <html>
        <?php
        include("layouts/head.php");
        ?>

        <body>
            <?php include("components/navbar.php") ?>
            <div class="container p-5">
                <div class="row d-flex justify-content-center">
                    <h2>Password Changed!</h2>
                </div>
                <div class="row d-flex justify-content-center p-5 q">
                    <a href="signin.php"><button class="btn btn-primary">Go to Sign In</button></a>
                </div>
            </div>
            <?php
            include("layouts/bodyjs.php");
            ?>
        </body>

        </html>
    <?php } else { ?>
        <html>
        <?php
        include("layouts/head.php");
        ?>

        <body>
            <?php include("components/navbar.php") ?>
            <div class="container p-5">
                <div class="row d-flex justify-content-center">
                    <h2>Wrong email, security question or answer!</h2>
                </div>
                <div class="row d-flex justify-content-center p-5 q">
                    <button class="btn btn-primary" onclick="window.history.back();">Back</button>
                </div>
            </div>
            <?php
            include("layouts/bodyjs.php");
            ?>
        </body>

        </html>
    <?php } ?>
<?php } else { ?>
    <html>
    <?php
    include("layouts/head.php");
    ?>

    <body>
        <?php include("components/navbar.php") ?>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>Password does not match!</h2>
            </div>
            <div class="row d-flex justify-content-center p-5 q">
                <button class="btn btn-primary" onclick="window.history.back();">Back</button>
            </div>
        </div>
        <?php
        include("layouts/bodyjs.php");
        ?>
    </body>

    </html>
<?php
}
?>