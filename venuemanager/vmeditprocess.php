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

$checkquery = "SELECT eimage FROM `2020_event` ";
$checkresult = $conn->query($checkquery);
if (!$checkresult) {
    echo $conn->error;
}

if(isset($_POST["requesteditevent"])){ 
$VMeditid = $_POST["vmeditid"];
$editeventtitle = $_POST["Neweventtitle"];
$editeventvenue = $_POST["Neweventvenue"];
$editeventdes = $_POST["Neweventdescription"];
$editeventdate = $_POST["Neweventdate"];
$editeventtime = $_POST["Neweventtime"];
$editcatevent = $_POST["Newcatevent"];
$editeventimage = $_FILES["Neweventimage"]['name'];
$editeventimagetemp= $_FILES['Neweventimage']['tmp_name'];

while ($rowread = $checkresult->fetch_assoc()) {
        $eventimagepath = $rowread['eimage'];
        
}

if($eventimagepath!==$editeventimage){
move_uploaded_file($editeventimagetemp, "../image/$editeventimage");
 
$editquery = "UPDATE 2020_event SET etitle='$editeventtitle', evenue='$editeventvenue', edes='$editeventdes',
              edate='$editeventdate', etime='$editeventtime', ecatid='$editcatevent', eimage='$editeventimage' WHERE eid='$VMeditid'";

$editresult = $conn -> query($editquery);

if(!$editresult) {  
echo $conn->error;

} else {
echo"Edit Sucessfully!";
echo"<a href='index.php'>Back to Home Page</a>";    
} 
}else{
    echo"Image already exist--Upload Failed!";
}
}

?>   

















