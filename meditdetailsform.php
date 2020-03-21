<?php
session_start();
include("showerrors.php");
include("conn.php");

if (!isset($_SESSION['username_40245529'])) {
    header("Location: signin.php");
}

if(isset($_SESSION['userid_40245529'])){   
    $member = $_SESSION['userid_40245529']; 
}

$readquery = "SELECT * FROM `2020_member` WHERE mid= '$member'  ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}
?>

<html>
    <head>
       
    <h1>Edit Details</h1>
<?php

while ($rowread = $readresult->fetch_assoc()) {

    $rowid = $rowread['mid'];
    $mfirstname = $rowread['mfirstname'];
    $mlastname = $rowread['mlastname'];
    $memail = $rowread['memail'];

}



   echo" <form action='meditdetailsprocess.php' method='POST'>
       
    
    <input type='hidden' value='$member' name='editid' />
    <br>
    
    <label>First Name: </label>
    <input type='text' placeholder='$mfirstname' name='Newmfirstname' size='30' required>
    <br>
        
    <label>Last Name: </label>
    <input type='text' placeholder='$mlastname' name='Newmlastname' size='30' required>
    <br>
        
    <label>Email: </label>
    <input type='text' placeholder='$memail' name='Newmemail' size='30' required>
    <br>

    
   
    <input type='submit' value='Edit' name='requestedit'>	
        
</form>";







?>
        
        
    </head>
</html>