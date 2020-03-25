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

$checkquery = "SELECT eimage FROM `2020_event` ";

$checkresult = $conn->query($checkquery);

if (!$checkresult) {
    echo $conn->error;
}

if(isset($_POST["uploadevent"])){   
$upeventtitle = $_POST["newetitle"];
$upeventvenue = $_POST["newvenue"];
$upeventdes = $_POST["newedes"];
$upeventdate = $_POST["newedate"];
$upeventtime = $_POST["newetime"];
$upeventcat = $_POST["newecat"];
$upeventimage = $_FILES["neweimage"]['name'];
$upeventimagetemp= $_FILES['neweimage']['tmp_name'];


while ($rowread = $checkresult->fetch_assoc()) {
        $eventimagepath = $rowread['eimage'];
        
}

if($eventimagepath!==$upeventimage){
    
 move_uploaded_file($upeventimagetemp, "../image/$upeventimage");   
 $uploadquery = "INSERT INTO 2020_event (evmid, etitle,evenueid,edes,edate,etime,ecatid,eimage) VALUES ('$venuemanager', '$upeventtitle','$upeventvenue','$upeventdes','$upeventdate','$upeventtime','$upeventcat', '$upeventimage')";
 $uploadresult = $conn -> query($uploadquery);  
 
if(!$uploadresult) {  
echo $conn->error;
}else{
    echo"Upload sucessfully";
    echo"<a href='index.php'>Back to Home Page</a>";
} 
}else{
    echo"Image already exist--Upload Failed!";
    
} 
}

?>