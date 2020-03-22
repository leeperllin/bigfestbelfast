<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if(!isset($_SESSION['VMname_40245529'])){
    header("Location: vmsignin.php");
    
}
if(isset($_SESSION['VMid_40245529'])){   
    $venuemanager = $_SESSION['VMid_40245529'];    
}

echo "$venuemanager";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Update Event Page</p>
       
        
      <?php   
    echo"<form enctype='multipart/form-data' action='vmuploadprocess.php' method='POST'>
    
    <input type='hidden' value='$venuemanager' name='venuemangerid'>
        
    <label>Event Title: </label>
    <input type='text' name='newetitle' id='newetitle'/>

    <label>Event Venue: </label>
    <input type='text' name='newevenue' id='newevenue'/>
    
    <label>Event Description : </label>
    <input type='text' name='newedes' id='newedes'/>

    <label>Event Date: </label>
    <input type='date' name='newedate' id='newedate'/>
    
    <label>Event Time: </label>
    <input type='time' name='newetime' id='newetime'/>
    
    <Label>Event Category:</label>
    <select name='newecat' required id='newecat'/>";
    
//show all option
    
$showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
$showoptionresult = $conn->query($showoptionquery);

echo"<option value=''>Choose Category</option> ";

while($row = $showoptionresult->fetch_assoc()){
    $catname = $row['etname'];
    $catid = $row['etid'];
    
    echo"<option value='$catid'>$catname</option>";
}

    echo"<label>Event images: </label>
    <input name='neweimage' id='neweimage' type='file'>
    
    <input type='submit' value='Upload New Event'  name='uploadevent' >
    <br>
    
</form>";
?>
    </body>
</html>
