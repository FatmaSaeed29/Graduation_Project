<?php 
require 'api.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_SESSION["userId"])){

        $userId             = $_SESSION['userId'];
        $category           =$_POST["category"];
        $phone              =$_POST["phone"];
        $date               =$_POST["date"];

    
    $errors = [];

    // category
    if(empty($category)){
        $errors[] = ["category" => "category is required" ];
    } elseif(is_numeric($category)){
        $errors[] = ["category" => "category must be a String" ];
    }

    // phone
    if(empty($phone)){
        $errors[] = ["phone" => "phone is required" ];
    } elseif(!is_numeric($phone)){
        $errors[] = ["phone" => "phone must be a Number" ];
    }

    // date
    if(empty($date)){
        $errors[] = ["date" => "date is required" ];
    } 

    
    if(empty($errors)){
         
        $query = "INSERT INTO appointment VALUES ('','$userId', '$category' , '$phone' , '$date')";
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

