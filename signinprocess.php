<?php
session_start();
include("showerrors.php");
include("conn.php");

$Musername = $_POST["muser"];
$Mpassword = $_POST["mpass"];

$checkuser = "SELECT * FROM 2020_member WHERE memail = '$Musername' AND mpass = '$Mpassword'";
$result = $conn->query($checkuser);

$numrows = $result->num_rows;

if ($numrows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Mid = $row['mid'];
        $Mfirstname = $row['mfirstname'];
        $mlastname = $row['mlastname'];
        $Memail = $row['memail'];


        $_SESSION['username_40245529'] = $Memail;
        $_SESSION['userid_40245529'] = $Mid;

        header("Location: index.php");
    }
} else { ?>
    <html>
    <?php
    include("layouts/head.php");
    ?>

    <body>
        <?php include("components/navbar.php") ?>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>User does not exist or password incorrect!</h2>
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