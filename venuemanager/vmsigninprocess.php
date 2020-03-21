<?php
session_start();
include("../showerror.php");
include("../conn.php");

$VMusername = $_POST["vmuser"];
$VMpassword = $_POST["vmpassword"];

$checkuser = "SELECT * FROM 2020_venuemanager WHERE vmname ='$VMusername' AND vmpass ='$VMpassword'"; 
$result = $conn->query($checkuser);
if (!$result ) {
        echo $conn->error;
 }
 
$numrows = $result->num_rows;

if($numrows>0){
    while($row = $result->fetch_assoc()){
        $VMid = $row['vmid'];
        $VMname = $row['vmname'];
        
        $_SESSION['VMid_40245529'] = $VMid;
        $_SESSION['VMname_40245529'] = $VMname;
        
        
        header("Location: index.php");
       
    } 
}else{
    echo "<p>user does not exist or password incorrect</p>";
    
    
}   
        

?>


        
    
