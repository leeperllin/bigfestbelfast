<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (!isset($_SESSION['VMname_40245529'])) {
    header("Location: vmsignin.php");
}
if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}

echo "$venuemanager";


$VMeditid = $_POST["vmeditid"];
$editeventtitle = $_POST["Neweventtitle"];
$editeventvenue = $_POST["Neweventvenue"];
$editeventdes = $_POST["Neweventdescription"];
$editeventdate = $_POST["Neweventdate"];
$editeventtime = $_POST["Neweventtime"];
$editcatevent = $_POST["Newcatevent"];
$editeventimage = $_FILES["Neweventimage"]['name'];
$editeventimagetemp= $_FILES['Neweventimage']['tmp_name'];



if (file_exists("../image/$editeventimage")) {
    echo "Sorry, file already exists."; 
    
}  

move_uploaded_file($editeventimagetemp, "../image/$editeventimage");
 

$editquery = "UPDATE 2020_event SET etitle='$editeventtitle', evenue='$editeventvenue', edes='$editeventdes',
              edate='$editeventdate', etime='$editeventtime', ecatid='$editcatevent', eimage='$editeventimage' WHERE eid='$VMeditid'";

$editresult = $conn -> query($editquery);

if(!$editresult) {  
echo $conn->error;
} echo"Edit Sucessfully!";
  echo"<a href='index.php'>Back to Home Page</a>";


?>   

















