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

?>

<html>
    <head>
    <form action='msginsert.php' method='POST'>
        
        <p>TO <input type='text' placeholder='write to who' name='msgreceiver'></p>
        
        <textarea name='msgcontent' style='height:300px'> </textarea> 
        
        <input type='submit' value='Send Message' name='sendmessage'></form>
    
        
    </form>
        
    </head>
</html>
