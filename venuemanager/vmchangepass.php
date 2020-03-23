<?php
session_start();
include("../showerrors.php");
include("../conn.php");

?>
<html>
    <head>
       
    <h1>VM Change Password</h1>
<?php


   echo"<form action='vmchangepassprocess.php' method='POST'>
       
    
       
    <label>ID name: </label>
    <input type='text' name='vmidname' id='vmidname' >
    <br>
    
    <label>Old Password: </label>
    <input type='password' name='vmopwd' id='vmopwd' >
    <br>
    
    <label>New Password: </label>
    <input type='password' name='vmnpwd' id='vmnpwd' >
    <br>
     
    <label>Confirm Password: </label>
    <input type='password' name='vmcpwd' id='vmcpwd' >
    <br>
      
   
    <input type='submit' value='Change Password' name='vmchangepassword'>	
        
</form>";







?>
        
        
    </head>
</html>