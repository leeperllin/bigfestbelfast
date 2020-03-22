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

if(isset($_POST["uploadevent"])){
    
//$upvmid = $_POST["venuemanagerid"];
$upeventtitle = $_POST["newetitle"];
$upeventvenue = $_POST["newevenue"];
$upeventdes = $_POST["newedes"];
$upeventdate = $_POST["newedate"];
$upeventtime = $_POST["newetime"];
$upeventcat = $_POST["newecat"];
$upeventimage = $_FILES["neweimage"]['name'];
$upeventimagetemp= $_FILES['neweimage']['tmp_name'];



if (file_exists("../image/$upeventimage")) {
    echo "Sorry, file already exists.";     
}  

move_uploaded_file($upeventimagetemp, "../image/$upeventimage");
 

$uploadquery = "INSERT INTO 2020_event (evmid, etitle,evenue,edes,edate,etime,ecatid,eimage) VALUES ('$venuemanager', '$upeventtitle','$upeventvenue','$upeventdes','$upeventdate','$upeventtime','$upeventcat', '$upeventimage')";
        
$uploadresult = $conn -> query($uploadquery);

if(!$uploadresult) {  
echo $conn->error;
echo"$uploadresult";
echo"$uploadquery";
} echo"Upload Sucessfully!";
  echo"<a href='index.php'>Back to Home Page</a>";

}

?>   

















