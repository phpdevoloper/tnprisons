<?php
require_once("../inc/DBConnection.php");

class DataMapper
{
    public static $db;
   
    public static function init($db)
    {
        var_dump('sdgf');die;
        self::$db = $db;
        var_dump($db);die;
    }
}
?>