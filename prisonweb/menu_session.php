<?php 
session_start();
$m =  $_POST['menu_id'];
$_SESSION['menu_id'] = $m;
?>