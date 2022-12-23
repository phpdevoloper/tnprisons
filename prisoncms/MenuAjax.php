<?php
session_start();
include_once 'inc/DBConnection.php';
try
{
    
    if (isset($_POST['menu_name_ta'])) {
        $menu_name_en        = $_POST["menu_name_ta"];
        $column_name         = "menu_name_ta";
    } else {
        $menu_name_en        = $_POST["menu_name_en"];
        $column_name         = "menu_name_en";
    }

    // $menu_name_en        = $_POST["menu_name_en"];
    $menu_id             = $_POST["menu_id"];


    $sql = "UPDATE sub_menus SET $column_name='$menu_name_en' WHERE menu_id = '$menu_id'";
    $res = pg_query($db,$sql);
    if ($res) {
        echo json_encode(["code"=>200,"msg"=>"Updated Successfully"]);
    }else {
        echo json_encode(["code"=>502,"msg"=>"Something went wrong"]);
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: ". $e->getMessage();
}
?>