<?php
session_start();
include("../showerrors.php");

?>

<html>
    <head>
    <h1> Venue Manager Login Page </h1>
    
<form action='vmsigninprocess.php' method='POST'>
    
    <label>ID Name: </label>
    <input type="text" name="vmuser"/>

    <label>Password: </label>
    <input type="text" name="vmpassword"/>
 
        <input type="submit" value="Login" name="requestvmlogin">	
        
<br>

<a href="vmchangepass.php">Forget password </a>
<br>

</form>
    
    



</head>
</html>