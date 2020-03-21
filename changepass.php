<?php
session_start();
include("showerrors.php");
include("conn.php");

?>
<html>
    <head>
       
    <h1>Change Password</h1>
<?php


   echo"<form action='changepassprocess.php' method='POST'>
       
    
       
    <label>Email: </label>
    <input type='text' name='email' id='email' >
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