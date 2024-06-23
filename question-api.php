<?php 
require 'api.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_SESSION["userId"])){

        $userId        = $_SESSION['userId'];
        $name          = $_POST["name"];
        $survey        = $_POST["survey"];

    
    $errors = [];

    // Name
    if(empty($name)){
        $errors[] = ["Name" => "Name is required" ];
    } elseif(is_numeric($name)){
        $errors[] = ["Name" => "Name must be a string" ];
    }

    // survey 
    if(empty($survey )){
        $errors[] = ["survey " => "Name is required" ];
    } elseif(is_numeric($survey )){
        $errors[] = ["survey " => "Name must be a string" ];
    }

    
    if(empty($errors)){
         
        $query = "INSERT INTO help VALUES('','$userId', '$name' ,'$survey' )";
        $result = mysqli_query($conn, $query);
            
        if($result){
            echo json_encode(["success" => true , "message" => "Data Successfully Inserted"]);
        } else{
            echo json_encode(["success" => false , "message" => "Error while registering"]);

        }

        
    } else{
        print_r(json_encode(["success" => false , "errors" => $errors]));
    }
    
} 
}else{
    echo json_encode(["success" => false , "message" => "Method is not allowed"]);

}
?>

