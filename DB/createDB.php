<?php
include('constains.php');

function createDB($name){
    try{
        $db = new PDO ("mysql:host" . DB_HOST, DB_USER, DB_PASS);
        $q = "CREATE DATABASE IF NOT EXISTS $name";
        $db->exec($q);
    }
    catch(PDOException $ex){
        die("DB ERROR: ".$ex->getMessage());
    }
}

createDB(DB_DATABASE);

?>