<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$ADusername = $_POST["aduser"];
$ADpassword = $_POST["adpassword"];

$checkuser = "SELECT * FROM 2020_admin WHERE adname ='$ADusername' AND adpass ='$ADpassword'";
$result = $conn->query($checkuser);
if (!$result) {
    echo $conn->error;
}

$numrows = $result->num_rows;

if ($numrows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ADid = $row['adid'];
        $ADname = $row['adname'];

        $_SESSION['ADid_40245529'] = $ADid;
        $_SESSION['ADname_40245529'] = $ADname;


        header("Location: index.php");
    }
} else { ?>
    <html>
    <?php
    include("../layouts/admin/head.php");
    ?>

    <body>
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <h2>User does not exist or password incorrect!</h2>
            </div>
            <div class="row d-flex justify-content-center p-5 q">
                <button class="btn btn-primary" onclick="window.history.back();">Back</button>
            </div>
        </div>
        <?php
        include("../layouts/admin/bodyjs.php");
        ?>

    </body>

    </html>

<?php
}
?>