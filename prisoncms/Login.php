<?php
session_start();
include_once 'inc/DBConnection.php';

try
{
    // var_dump($_POST);die;
    $user_name = $_POST["user_name"];
    $user_pass = $_POST["user_pass"];

    $token = strtolower($_POST['token']);

    // validate captcha code 		
	if (isset($_SESSION['captcha_token']) && $_SESSION['captcha_token'] == $token) {

        $sql = "SELECT * FROM user_info WHERE user_name ='$user_name' AND user_passwd = '$user_pass'" ;
        $affectedrows  = pg_query($db,$sql);
        $rows = pg_fetch_assoc($affectedrows);
        $res 	= pg_num_rows($affectedrows);
        if($res>0){
            $_SESSION['user_data'] = $rows['user_name'];
            echo json_encode(["code"=>"200","msg"=>"Login Succesfully"]);
        }else{
            echo json_encode(["code"=>"500","msg"=>"Incorrect Username or Password"]);
        }
    }else{
        echo json_encode(["code"=>"502","msg"=>"Error in captch"]);
    }          
    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: ". $e->getMessage();
}
?>