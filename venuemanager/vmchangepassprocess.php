<?php
session_start();
include("../showerrors.php");
include("../conn.php");

$vmidname = $_POST['vmidname'];
$vmopwd = $_POST['vmopwd'];
$vmnpwd = $_POST['vmnpwd'];
$vmcpwd = $_POST['vmcpwd'];


if($vmnpwd==$vmcpwd){
$selectquery = "SELECT vmname, vmpass FROM `2020_venuemanager` WHERE vmname= '$vmidname' AND vmpass='$vmopwd'";

$selectresult = $conn->query($selectquery);
$numrows = $selectresult->num_rows;

if($numrows>0){
    
    $changepassquery = "UPDATE 2020_venuemanager set vmpass='$vmnpwd' WHERE vmname='$vmidname'";
    $changepassresult = $conn -> query($changepassquery); 
    
    echo"<p>Password Changed</p>";
echo"<p><a href=vmsignin.php>Back to Sign in Page</a></p>";

}else{
    echo"<p>Wrong ID name</p>";
}
}else{
    echo"<p>Password does not match</p>";
}
    
    
?>
