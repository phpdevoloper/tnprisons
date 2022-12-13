<?php 
session_start();
$_SESSION['lang'] = $_POST["title"];
echo json_encode(["code"=>200,"status"=>"sucess"]);
?>