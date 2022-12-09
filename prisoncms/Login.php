<?php
session_start();
include_once 'inc/DBConnection.php';

try
{
    $database = new DBConnection();
    $db = $database->openConnection();
    // var_dump($_POST);die;
    $user_name = $_POST["user_name"];
    $user_pass = $_POST["user_pass"];

    $sql = "SELECT * FROM user_info WHERE user_name ='$user_name' AND user_passwd = '$user_pass'" ;
    $affectedrows  = $db->query($sql);
    $rows = $affectedrows->fetchAll();
    $_SESSION['user_data'] = $rows[0]['user_name'];
   if(isset($rows))
    {
       echo json_encode(["code"=>"200","msg"=>$rows]);
    }else{
        echo json_encode(["code"=>"500","msg"=>"Something went wrong"]);
    }          
    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: ". $e->getMessage();
}
?>