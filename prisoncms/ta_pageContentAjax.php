<?php
session_start();
include_once 'inc/DBConnection.php';
try
{
    $page_id             = $_POST["page_id_ta"];
    $page_content        = $_POST["page_content"];
    $updated_by           = $_SESSION['user_data'];
    
    if (isset($page_id) && !empty($page_id)) {
        $sql = "SELECT * FROM page_content WHERE page_id = '$page_id'";
        $res = pg_query($db, $sql);
        $result = pg_fetch_assoc($res);
                            
        if (empty($result)) {
            $sql = "INSERT INTO page_content(page_content_ta,page_id,updated_by) VALUES('$page_content','$page_id','$updated_by')";
            if (pg_query($db, $sql)) {
                echo json_encode(["code"=>200,"msg"=>"Successfully Submitted"]);
            }else {
                echo json_encode(["code"=>502,"msg"=>"Something went wrong"]);
            }
            
        } else { 
            $sql = "UPDATE page_content SET page_content_ta = '$page_content', page_id = '$page_id',updated_by = '$updated_by' WHERE page_id = '".$result['page_id']."'";
            if (pg_query($db, $sql)) {
                echo json_encode(["code"=>200,"msg"=>"Updated Successfully"]);
            }else {
                echo json_encode(["code"=>502,"msg"=>"Something went wrong"]);
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