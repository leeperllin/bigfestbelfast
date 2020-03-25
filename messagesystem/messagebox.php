<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

echo "$member";


$mreceiver= $_GET['receiver'];

?>

<?php
if(isset($_GET['receiver'])){
    $_GET['receiver'] = $_GET['receiver'];
}else{
    $readquery2 = "SELECT sender, receiver FROM 2020_message
                  WHERE sender='$member' or receiver='$member'
                  ORDER BY `datetime` DESC LIMIT 1";
    
    $readresult2 =$conn->query($readquery2);
    
   if (!$readresult) {
   echo $conn->error;
   }else{
       if(mysqli_num_rows($readresult2)>0){
           while($rowread2 = $readresult2->fetch_assoc()){
               $sender_name = $rowread2['sender'];
               $receiver_name = $row['receiver'];
               
               if($member== $sender_name){
                   $_GET['receiver']= $receiver_name;
                   
               }else{
                   $_GET['receiver'] = $sender_name;
               }
                       
           }
           
       }else{
           echo"no message from you";
       }
   }
}

?>

<?php
$readquery = "SELECT * FROM 2020_message WHERE sender='$member' AND receiver='$mreceiver' 
              OR sender='$mreceiver' AND receiver='$member' ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
    
}else{
    while ($rowread = $readresult->fetch_assoc()) {

    $namesender = $rowread['sender'];
    $namereceiver = $rowread['receiver'];
    $msgcontent = $rowread['msgcontent'];
    
    if($namesender==$member){
        //show message with blue
        echo"Me: ";
        echo"$msgcontent<br>";
        
    }else{
        //show message with white
        echo"$namesender";
        echo"$msgcontent";
        
    }
    
  
    
}
}

?>