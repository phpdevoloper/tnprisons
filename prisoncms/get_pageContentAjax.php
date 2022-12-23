<?php
session_start();
include_once 'inc/DBConnection.php';
try
{
    $page_id             = $_POST["page_id"];
    $con_type            = $_POST["con_type"];

    if (isset($page_id) && !empty($page_id) && isset($con_type)) {
        if($con_type == 'english'){
            $sql = "SELECT page_content_en FROM page_content WHERE page_id = '$page_id'";
            $res = pg_query($db, $sql);
            $result = pg_fetch_assoc($res);
            if(!empty($result['page_content_en'])){
                $page_content = $result['page_content_en'];
                echo json_encode($page_content);
            }else{
                echo json_encode(["code"=>502,"msg"=>"No content Found"]);
            }
            
        }else {
            $sql = "SELECT page_content_ta FROM page_content WHERE page_id = '$page_id'";
            $res = pg_query($db, $sql);
            $result = pg_fetch_assoc($res);
            
            if(!empty($result)){
                $page_content = $result['page_content_ta'];
                echo json_encode($page_content);
            }else{
                echo json_encode(["code"=>502,"msg"=>"No content Found"]);
            }
        }

       
    }else {
        echo json_encode(["code"=>502,"msg"=>"Page ID not setted"]);
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: ". $e->getMessage();
}
?>