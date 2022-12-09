<?php 
session_start();
if (empty($_POST)) {
    $_SESSION['lang'] = "en";
}
?>