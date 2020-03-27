<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$VMusername = $_POST["vmuser"];
$VMpassword = $_POST["vmpassword"];

$checkuser = "SELECT * FROM 2020_venuemanager WHERE vmname ='$VMusername' AND vmpass ='$VMpassword'";
$result = $conn->query($checkuser);
if (!$result) {
    echo $conn->error;
}

$numrows = $result->num_rows;

if ($numrows > 0) {
    while ($row = $result->fetch_assoc()) {
        $VMid = $row['vmid'];
        $VMname = $row['vmname'];
        $_SESSION['VMid_40245529'] = $VMid;
        $_SESSION['VMname_40245529'] = $VMname;
        header("Location: index.php");
    }
} else { ?>
    <html>
    <?php
    include("../layouts/venuemanager/head.php");
    ?>

    <body>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>User does not exist or password incorrect!</h2>
            </div>
            <div class="row d-flex justify-content-center p-5 ">
                <button class="btn btn-info" onclick="window.history.back();">Back</button>
            </div>
        </div>
        <?php
        include("../layouts/venuemanager/bodyjs.php");
        ?>

    </body>

    </html>
<?php
}
?>