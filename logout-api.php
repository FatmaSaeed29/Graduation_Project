<?php
    
    require 'api.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_unset();
    session_destroy();
    echo json_encode(["success" => true, "message" => "successfully logout"]);
    }
?>