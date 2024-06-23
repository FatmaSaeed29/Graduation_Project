<?php 

require 'api.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_SESSION["userId"])){

        $userId             = $_SESSION['userId'];
        $name               = $_POST["name"];
        $national_id        = $_POST["national_id"];
        $section            = $_POST["section"];
        $category           = $_POST["category"];
        $job                = $_POST["job"];

    
    $errors = [];


    // name
    if(empty($name)){
        $errors[] = ["name" => "name is required" ];
    } elseif(is_numeric($name)){
        $errors[] = ["name" => "name must be a String" ];
    }

    // National ID
    if(empty($national_id)){
        $errors[] = ["National ID" => "National ID is required" ];
    } elseif(!is_numeric($national_id)){
        $errors[] = ["National ID" => "National ID must be a Number" ];
    }elseif(strlen($national_id) < 14){
        $errors[] = ["National ID" => "National ID must = 14 Numbers" ];
    }elseif(strlen($national_id) > 14){
        $errors[] = ["National ID" => "National ID must = 14 Numbers" ];
    }


    // section
    if(empty($section)){
        $errors[] = ["section" => "section is required" ];
    } elseif(is_numeric($section)){
        $errors[] = ["section" => "section must be a String"];
    }

    // category
    if(empty($category)){
        $errors[] = ["category" => "category is required" ];
    } elseif(is_numeric($category)){
        $errors[] = ["category" => "category must be a String" ];
    }

    // job
    if(empty($job)){
        $errors[] = ["job" => "job is required" ];
    } elseif(is_numeric($job)){
        $errors[] = ["job" => "job must be a String" ];
    }
   
    
    if(empty($errors)){
         
        $query = "INSERT INTO employees VALUES('','$userId','$name','$national_id','$section','$category' ,'$job' )";
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

