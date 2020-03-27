<?php
session_start();
include("showerrors.php");


include("conn.php");

$Mnewfirstname = $_POST["mfirstname"];
$Mnewlastname = $_POST["mlastname"];
$Mnewemail = $_POST["mnewemail"];
$Mnewpass = $_POST["mnewpass"];
$Mconpass = $_POST["mconpass"];
$Mnewquestion = $_POST["mnewquestion"];
$Mnewanswer = $_POST["mnewanswer"];


if ($Mnewpass == $Mconpass) {
    $registerquery = "INSERT INTO 2020_member (mfirstname,mlastname,memail,mpass,mquestion,manswer) VALUES ('$Mnewfirstname','$Mnewlastname','$Mnewemail','$Mnewpass','$Mnewquestion','$Mnewanswer')";

    $registerresult = $conn->query($registerquery);
    if (!$registerresult) {
        echo $conn->error;
    } else { ?>
        <html>
        <?php
        include("layouts/head.php");
        ?>

        <body>
            <?php include("components/navbar.php") ?>
            <div class="container p-5">
                <div class="row d-flex justify-content-center">
                    <h2>Registered successful!</h2>
                </div>
                <div class="row d-flex justify-content-center p-5 q">
                    <a href='signin.php'><button class="btn btn-primary">Back to Sign in</button></a>
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

<html>

<head>



</head>

</html>