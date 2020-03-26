<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
} 

echo "$venuemanager";

//$messagemember= $_GET['sentoid'];
$messagemember= $_GET['msgmid'];


?>




<?php
$readquery = "SELECT * FROM 2020_message WHERE sender='$venuemanager' OR receiver='$venuemanager' AND 
              sender='$messagemember' OR receiver='$messagemember' ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
    
}else{
    while ($rowread = $readresult->fetch_assoc()) {

    $isend = $rowread['sender'];
    $ireceive = $rowread['receiver'];
    $msgcontent = $rowread['msgcontent'];
    
    if($isend!==$venuemanager){
        //show not me message with blue
        echo"Member User: ";
        echo"$msgcontent<br>";
        
    }else{
        
        echo"Me: ";
        echo"$msgcontent<br>";
        //show me message with white
        
        
    }
    
  
    
}
}

?>

<html>
    <head>
      <?php
     
    echo"<form action='vmmsginsert.php' method='POST'>
        
        <input type='hidden' value='$messagemember' name='msgreceiver' >
        
        <p>TO: <input type='text' name='msgto' value='$messagemember' disabled > </p>
        
        <textarea name='msgcontent' style='height:300px'> </textarea> 
        
        <input type='submit' value='Send Message' name='sendmessage'></form>";
    
   ?>
        
    </head>   
</html>