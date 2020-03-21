<?php
session_start();
include("showerrors.php");

if(!isset($_SESSION['username_40245529'])){
    header("Location: signin.php");
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Register Page</p>
        
        <form action='registerprocess.php' method='POST'>
    
    <label>First Name: </label>
    <input type="text" name="mfirstname"/>

    <label>Last Name: </label>
    <input type="text" name="mlastname"/>
    
    <label>Email: </label>
    <input type="text" name="mnewemail"/>

    <label>Password: </label>
    <input type="text" name="mnewpass"/>
    
 
    <input type="submit" value="Register" name="registeracc">	
        

</form>
    </body>
</html>
