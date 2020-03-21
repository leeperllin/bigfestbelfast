<?php
session_start();
include("showerror.php");
include("conn.php");

$Musername = $_POST["muser"];
$Mpassword = $_POST["mpass"];

$checkuser = "SELECT * FROM 2020_member WHERE memail = '$Musername' AND mpass = '$Mpassword'"; 
$result = $conn->query($checkuser);

$numrows = $result->num_rows;

if($numrows>0){
    while($row = $result->fetch_assoc()){
        $Mid = $row['mid'];
        $Mfirstname = $row['mfirstname'];
        $mlastname = $row['mlastname'];
        $Memail = $row['memail'];
        
        
        $_SESSION['username_40245529'] = $Memail;
        $_SESSION['userid_40245529'] = $Mid;
        
        header("Location: index.php");
       
    } 
}else{
    echo "<p>user does not exist or password incorrect</p>";
}
        

?>


        
    
