<!DOCTYPE html>

<?php
session_start();

$_SESSION = array();
//unset and destory
session_destroy();

header("Location: signin.php");
?>

