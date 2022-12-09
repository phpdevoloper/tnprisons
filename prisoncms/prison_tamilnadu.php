<?php
session_start();

if (isset($_POST["prison_code"])) {
    $_SESSION["prison_type"] = $_POST["prison_code"];
    $_SESSION["page_title"] = $_POST["page_title"];
   echo json_encode(["code"=> 200,"msg"=>"sucess"]);
}else{
    echo json_encode(["code"=> 500,"msg"=>"failed"]);
}
?>