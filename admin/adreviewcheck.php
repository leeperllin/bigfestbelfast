<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['ADname_40245529'])) {
    header("Location: adsignin.php");
}
if (isset($_SESSION['ADid_40245529'])) {
    $admin = $_SESSION['ADid_40245529'];
}

?>

<html>
<?php
include("../layouts/admin/head.php")
?>

<body>
    <?php
    include("../admin/components/navbar.php")
    ?>
    <div class="d-flex justify-content-center">
        <h1 class="display-4 text-primary p-2">Review Content</h1>
    </div>
    <div class="container">
        <?php
        $reviewquery = "SELECT 2020_member.mfirstname, 2020_member.mlastname, 2020_reviews.comment, 2020_event.etitle, 2020_reviews.rid
                         FROM 2020_reviews 
                         INNER JOIN 2020_member ON 2020_reviews.memberid = 2020_member.mid
                         INNER JOIN 2020_event ON 2020_reviews.eventid = 2020_event.eid";
        $reviewresult = $conn->query($reviewquery);
        while ($rowread3 = $reviewresult->fetch_assoc()) {

            $adminrid = $rowread3['rid'];
            $reviewerfirstname = $rowread3['mfirstname'];
            $reviewerlastname = $rowread3['mlastname'];
            $reviewertext = $rowread3['comment'];
            $reviewevent = $rowread3['etitle'];
        ?>
            <div class="row">
                <div class="col-12">
                    <div class="card rounded border-secondary p-2 m-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="text-primary">Reviewer: <strong class="text-dark"><?php echo $reviewerfirstname . " " . $reviewerlastname; ?></strong></div>
                            <div><?php echo $reviewertext; ?></div>
                            <a class="btn btn-primary text-light" href='adreviewprocess.php?deletereview=<?php echo $adminrid; ?>'>Hide Review</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <?php
    include("../layouts/admin/bodyjs.php")
    ?>
</body>

</html>