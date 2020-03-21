<?php
session_start();
include("../showerrors.php");
include("../conn.php");

   $name=$_POST['user'];
   $password=$_POST['pass']; 
   //avoid SQL injection
   // remove all single quotation test' or 1=1#
   // need to check positing the right variable from login form
   $name = mysqli_real_escape_string($conn, $name);
   $password = mysqli_real_escape_string($conn, $password);
   
    
   $check = "SELECT * FROM `2020_admin` WHERE username='$name' AND password='$password'";
   
   $result = $conn->query($check);
   $num = $result->num_rows;
   
   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        // need css to design text  
        <?php
        if($num > 0 ){
            echo "you are a valid user";
            $_SESSION['adminlogin'] = $name;
            header("Location: index.php");
            
           
        }
        else{
            echo "You are not able to login";
            
        }
        ?>
        
    </body>
</html>
