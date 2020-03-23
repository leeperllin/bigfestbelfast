<?php
session_start();
include("../showerror.php");
include("../conn.php");

$ADusername = $_POST["aduser"];
$ADpassword = $_POST["adpassword"];

$checkuser = "SELECT * FROM 2020_admin WHERE adname ='$ADusername' AND adpass ='$ADpassword'"; 
$result = $conn->query($checkuser);
if (!$result ) {
        echo $conn->error;
 }
 
$numrows = $result->num_rows;

if($numrows>0){
    while($row = $result->fetch_assoc()){
        $ADid = $row['adid'];
        $ADname = $row['adname'];
        
        $_SESSION['ADid_40245529'] = $ADid;
        $_SESSION['ADname_40245529'] = $ADname;
        
        
        header("Location: index.php");
       
    } 
}else{
    echo "<p>user does not exist or password incorrect</p>";
    
    
}   
        

?>


        
    

