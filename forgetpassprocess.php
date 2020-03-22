<?php
session_start();
include("showerrors.php");
include("conn.php");

$Mmail = $_POST['memberemail'];
$Msq = $_POST['membersq'];
$Msa = $_POST['membersa'];
$Mnpwd = $_POST['membernpwd'];
$Mcpwd = $_POST['membercpwd'];

if($Mnpwd==$Mcpwd){
$selectquery = "SELECT memail, mquestion, manswer FROM `2020_member` WHERE memail='$Mmail' AND mquestion= '$Msq' AND manswer='$Msa'";

$selectresult = $conn->query($selectquery);
$numrows = $selectresult->num_rows;

if($numrows>0){
    
    $changeforpassquery = "UPDATE 2020_member set mpass='$Mnpwd' WHERE memail='$Mmail' AND mquestion= '$Msq' AND manswer='$Msa'";
    $changeforpassresult = $conn -> query($changeforpassquery); 
    
    echo"<p>Password Changed</p>";
echo"<p><a href=signin.php>Back to Sign in Page</a></p>";

}else{
    echo"<p>Wrong email, security question or answer</p>";
}
}else{
    echo"<p>Password does not match</p>";
}

?>

