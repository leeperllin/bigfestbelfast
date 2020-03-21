<?php
session_start();
include("showerrors.php");

?>

<html>
    <head>
    <h1> Login Page </h1>
    
<form action='signinprocess.php' method='POST'>
    
    <label>Email: </label>
    <input type="text" name="muser"/>

    <label>Password: </label>
    <input type="text" name="mpass"/>
 
        <input type="submit" value="Login" name="requestlogin">	
        
<br>

<a href="changepass.php">Forget password </a>
<br>
<a href="register.php">Not user? Create an account now </a>
</form>
    
    



</head>
</html>