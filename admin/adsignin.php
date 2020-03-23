<?php
session_start();
include("../showerrors.php");

?>

<html>
    <head>
    <h1> Admin Login Page </h1>
    
<form action='adsigninprocess.php' method='POST'>
    
    <label>ID Name: </label>
    <input type="text" name="aduser"/>

    <label>Password: </label>
    <input type="password" name="adpassword"/>
 
        <input type="submit" value="Login" name="requestadlogin">	
        
<br>



</form>
    
    



</head>
</html>