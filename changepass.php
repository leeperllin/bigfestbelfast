<?php
session_start();
include("showerrors.php");
include("conn.php");

if(isset($_SESSION['username_40245529'])){   
    $membername = $_SESSION['username_40245529']; 
}
?>
<html>
    <head>
       
    <h1>Change Password</h1>
<?php


   echo"<form action='changepassprocess.php' method='POST'>
       
    
       
    <label>Email: </label>
    <input type='text' value='$membername' name='email' id='email' disabled />
    <br>
    
    <label>Old Password: </label>
    <input type='password' name='opwd' id='opwd' >
    <br>
    
    <label>New Password: </label>
    <input type='password' name='npwd' id='npwd' >
    <br>
     
    <label>Confirm Password: </label>
    <input type='password' name='cpwd' id='cpwd' >
    <br>
      
   
    <input type='submit' value='Change Password' name='changepassword'>	
        
</form>";







?>
        
        
    </head>
</html>