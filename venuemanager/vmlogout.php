<!DOCTYPE html>
<?php
session_start();

$_SESSION = array();
//unset and destory
session_destroy();

header('refresh:0.1; url=vmsignin.php');
?>
