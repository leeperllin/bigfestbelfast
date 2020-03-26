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

?>

<?php
$readquery = "SELECT * FROM 2020_message WHERE sender='$member' OR receiver='$member' ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
    
}else{
    while ($rowread = $readresult->fetch_assoc()) {

    $isend = $rowread['sender'];
    $ireceive = $rowread['receiver'];
    $msgcontent = $rowread['msgcontent'];
    
    if($isend==$member){
        //show me message with white
        echo"Me: ";
        echo"$msgcontent<br>";
        
    }else{
        
        echo"Venue Manager: ";
        echo"$msgcontent<br>";
        //show not me message with blue
        
    }
      
    
}
}

?>

<html>
    <head>
      <?php
      include("index.php");
      
      ?>
        
    </head>   
</html>
