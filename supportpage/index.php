<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$readquery1 = "SELECT * FROM `2020_support`  ";

$readresult1 = $conn->query($readquery1);

if (!$readresult1) {
    echo $conn->error;
}
?>
<html>
<?php
include("../layouts/head.php");
?>

<body>
    <?php include("../components/secnavbar.php"); ?>
    <p>Support Page</p>
    <?php
    while ($rowread1 = $readresult1->fetch_assoc()) {

        $rowid = $rowread1['sid'];
        $supportdes = $rowread1['sdes'];
        echo "<p>$supportdes </p> ";
    }
    ?>
    <?php
    include("../layouts/bodyjs.php");
    ?>
</body>

</html>