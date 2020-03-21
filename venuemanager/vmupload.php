<?php
session_start();
include("../showerrors.php");
include("../conn.php");

if(!isset($_SESSION['vmlogin'])){
    header("Location: vmlog.php");
}



?>