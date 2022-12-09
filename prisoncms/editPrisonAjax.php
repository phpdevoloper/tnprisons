<?php
session_start();
include_once 'inc/DBConnection.php';

try
{
    $database = new DBConnection();
    $db = $database->openConnection();
    // var_dump($_POST);die;
    $prison_name        = $_POST["prison_name"];
    $prison_location    = $_POST["prison_location"];
    $prison_district    = $_POST["prison_district"];
    $prison_type        = $_POST["prison_type"];
    $prison_juri        = $_POST["prison_juri"];
    $prison_address     = $_POST["prison_address"];
    $prison_id          = $_POST["prison_id"];
    

    $sql = "UPDATE prisons_in_tamilnadu SET prison_name=:prison_name,prison_locan=:prison_locan,prison_dist=:prison_dist,prison_type=:prison_type,
    prison_jurisd=:prison_jurisd,prison_addr=:prison_address WHERE prison_id=:prison_id";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':prison_name', $prison_name, PDO::PARAM_STR);
    $stmt->bindParam(':prison_locan',$prison_location,PDO::PARAM_STR);
    $stmt->bindParam(':prison_dist',$prison_district,PDO::PARAM_STR);
    $stmt->bindParam(':prison_type',$prison_type,PDO::PARAM_STR);
    $stmt->bindParam(':prison_jurisd',$prison_juri,PDO::PARAM_STR);
    $stmt->bindParam(':prison_address',$prison_address,PDO::PARAM_STR);
    $stmt->bindParam(':prison_id',$prison_id,PDO::PARAM_STR);
    if ($stmt->execute()) {
        echo json_encode(["code"=>"200","msg"=>"success"]);
    }else{
        echo json_encode(["code"=>"500","msg"=>"Something went wrong"]);
    }


    // if ($db->prepare($sql)->execute($data)) {
    //     echo json_encode(["code"=>"200","msg"=>"success"]);
    // }else{
    //     echo json_encode(["code"=>"500","msg"=>"Something went wrong"]);
    // }     
}
catch (PDOException $e)
{
    echo "There is some problem in connection: ". $e->getMessage();
}
?>