<?php 
session_start();
if(isset($_SESSION['lang']) && $_SESSION['lang'] !="") {
  include("inc/header_".$_SESSION['lang'].".php");
} else {
  $_SESSION['lang'] = 'en';
  include("inc/header_".$_SESSION['lang'].".php");
}
?>
