<?php 
require 'api.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!empty($_SESSION["userId"])){
        $user_id = $_SESSION["userId"] ;  

        $query  =  mysqli_query($conn, "SELECT * 
        FROM registeration , vaccine , operation ,appointment
        where registeration.national_ID= $user_id 
        AND vaccine.user_id = $user_id 
        AND operation.user_id = $user_id 
        AND appointment.user_id = $user_id ");

        if(mysqli_num_rows($query) > 0){
        
            $user  = $query -> fetch_all(MYSQLI_ASSOC);

            echo json_encode(["success" => true , "message" => "User Profile Successfully Viwed" , "data" => $user[0]]);
        
        } else{
            echo json_encode([ "success" => false , "message" => "Not Authorized"]);
        }
    } else{
        print_r(json_encode(["success" => false , "errors" => $errors]));
    }
    
} else{
    echo json_encode(["success" => false , "message" => "Method is not allowed"]);
}
?>