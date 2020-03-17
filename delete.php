<?php

    include 'DB/database.php';
    $DB = new Database(DB_DATABASE);
    $id = $_REQUEST['id'];
    $delete = $DB->delete($id);
    if( $delete ){
        echo '<script> alert("THIS RECORED DELETED!..");</script>';
        echo '<script> window.location.href = "show.php";</script>';
    }
            else{
                echo '<script> alert("THIS RECORED NOT DELETED!..");</script>';
            }
        
    
?>