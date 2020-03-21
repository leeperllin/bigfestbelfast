<?php
session_start();
include("../showerrors.php");


if(!isset($_SESSION['adminlogin'])){
    header("Location: log.php");
}
// if not isset , echo log.php
?>