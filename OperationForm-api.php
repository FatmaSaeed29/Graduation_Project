<?php 

require 'api.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_SESSION["userId"])){

        $userId             = $_SESSION['userId'];
        $hospital_name      = $_POST["hospital_name"];
        $doctor_name        = $_POST["doctor_name"];
        $operation          = $_POST["operation_type"];
        $health_status      = $_POST["diseases"];

    
    $errors = [];

    // hospital_name
    if(empty($hospital_name)){
        $errors[] = ["hospital_name" => "hospital_name is required" ];
    } elseif(is_numeric($hospital_name)){
        $errors[] = ["hospital_name" => "hospital_name must be a String" ]; 
    }

    // doctor_name
    if(empty($doctor_name)){
        $errors[] = ["doctor_name" => "doctor_name is required" ];
    } elseif(is_numeric($doctor_name)){
        $errors[] = ["doctor_name" => "doctor_name must be a String" ]; 
    }

    // operation
    if(empty($operation)){
        $errors[] = ["operation" => "operation is required" ];
    } 

    // health_status
    if(empty($health_status)){
        $errors[] = ["health_status" => "health_status is required" ];
    } 

    
    if(empty($errors)){
         
        $query = "INSERT INTO operation VALUES('', '$userId' ,'$hospital_name','$doctor_name','$operation','$health_status' )";
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

