<?php
session_start();
include("showerrors.php");
include("conn.php");
?>
<html>
    <head>

    <h1>Forget Password</h1>



    <form action='forgetpassprocess.php' method='POST'>
        
        <label>Email: </label>
        <input type='text' name='memberemail' id='memberemail' >
        <br>
        
        <label>Security Question: </label>
        <select class="form-control" name="membersq">
            <option value="What is your dog name?">What is your dog name?</option>
            <option value="What were the last four digits of your telephone number?">What were the last four digits of your childhood telephone number?</option>
            <option value="What primary school did you attend?">What primary school did you attend?</option>
        </select>

        <label>Security Answer: </label>
        <input type='text' name='membersa' id='membersa' >
        <br>

        <label>New Password: </label>
        <input type='password' name='membernpwd' id='membernpwd' >
        <br>

        <label>Confirm Password: </label>
        <input type='password' name='membercpwd' id='membercpwd' >
        <br>


        <input type='submit' value='Change Password' name='changeforgetpassword'>	

    </form>










</head>
</html>
