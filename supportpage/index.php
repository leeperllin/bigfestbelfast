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
include("../layouts/sechead.php");
?>

<body id="supportPageBody">
    <?php include("../components/secnavbar.php"); ?>
    <div class="d-flex justify-content-center">
        <div id="supportPagePaper" class="border rounded border-primary w-75 m-5">
            <div class="d-flex justify-content-center text-light display-4 p-5">Support Us</div>
            <div class="container">
                <?php
                while ($rowread1 = $readresult1->fetch_assoc()) {

                    $rowid = $rowread1['sid'];
                    $supportdes = $rowread1['sdes'];
                ?>
                    <div class="row">
                        <h5 class="text-light p-5"><?php echo $supportdes; ?></h5>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    include("../layouts/secbodyjs.php");
    ?>
</body>

</html>