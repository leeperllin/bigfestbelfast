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


$Eventid2 = $_GET['eventid'];


?>


<html>
    <head>
        
        <?php
echo" <form enctype='multipart/form-data' action='vmeditprocess.php' method='POST'>
     
    
    <input type='hidden' value='$Eventid2' name='vmeditid'>
          
    <label>Event Title: </label>
    <input type='text' placeholder='' name='Neweventtitle' id='Neweventtitle' size='30' required>
    <br>
        
    <label>Event Venue: </label>
    <input type='text' placeholder='' name='Neweventvenue' id='Neweventvenue' size='30' required>
    <br>
    
    <label>Event Description: </label>
    <input type='text' placeholder='' name='Neweventdescription' id='Neweventdescription'>
    <br>
        
    <label>Event Date: </label>
    <input type='date' placeholder='' name='Neweventdate' id='Neweventdate' >
    <br>
    
    <label>Event time: </label>
    <input type='time' placeholder='' name='Neweventtime' id='Neweventtime' >
    <br>
    
    <Label>Event Category:</label>
    <select name='Newcatevent' required/>";
    

//for showing the option select

$showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
$showoptionresult = $conn->query($showoptionquery);

echo"<option value=''>Choose Category</option> ";

while($row = $showoptionresult->fetch_assoc()){
    $catname = $row['etname'];
    $catid = $row['etid'];
    
    echo"<option value='$catid'>$catname</option>";
}

    echo"<label>Event images: </label>
    <input name='Neweventimage' id='Neweventimage' type='file'>
    
    <input type='submit' value='Edit Event'  name='requesteditevent' >
    <br>
    
</form>";
?>

</head>
</html>
    





















