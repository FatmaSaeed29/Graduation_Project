<?php 

require 'api.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_SESSION["userId"])){

        $userId             = $_SESSION['userId'];
        $national_id        = $_POST["national_ID"];
        $name               = $_POST["name"];
        $phone              = $_POST["phone"];
        $gender             = $_POST["gender"];
        $blood_type         = $_POST["blood_type"];
        $weight             = $_POST["weight"];
        $birth_date         = $_POST["birth_date"];
        $government         = $_POST["government"];
        $city               = $_POST["city"];
        $center             = $_POST["center"];
        $mother_num         = $_POST["mother_num"];
        $child_num          = $_POST["child_num"];
        $hospital_name      = $_POST["hospital_name"];
        $doctor_name        = $_POST["doctor_name"];
        $father_id          = $_POST["father_id"];
        $father_job         = $_POST["father_job"];
        $mother_id          = $_POST["mother_id"];
        $mother_job         = $_POST["mother_job"];

    
    $errors = [];

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

    // name
    if(empty($name)){
        $errors[] = ["name" => "name is required" ];
    } elseif(is_numeric($name)){
        $errors[] = ["name" => "name must be a String" ];
    }

    // phone
    if(empty($phone)){
        $errors[] = ["phone" => "phone is required" ];
    } elseif(!is_numeric($phone)){
        $errors[] = ["phone" => "phone must be a Number" ];
    }

    // gender
    if(empty($gender)){
        $errors[] = ["gender" => "gender is required" ];
    }

    // blood_type
    if(empty($blood_type)){
        $errors[] = ["blood_type" => "blood_type is required" ];
    }

    
    // weight
    if(empty($weight)){
        $errors[] = ["weight" => "weight is required" ];
    } 
    
    // birthdate
    if(empty($birth_date)){
        $errors[] = ["birth_date" => "birth_date is required" ];
    } 

    // government
    if(empty($government)){
        $errors[] = ["government" => "government is required" ];
    } 

    // city
    if(empty($city)){
        $errors[] = ["city" => "city is required" ];
    } 

    // center
    if(empty($center)){
        $errors[] = ["center" => "center is required" ];
    } 

    // mother_num
    if(empty($mother_num)){
        $errors[] = ["mother_num" => "mother_num is required" ];
    } elseif(!is_numeric($mother_num)){
        $errors[] = ["mother_num" => "mother_num must be a Number" ];
    }

    // child_num
    if(empty($child_num)){
        $errors[] = ["child_num" => "child_num is required" ];
    } elseif(!is_numeric($child_num)){
        $errors[] = ["child_num" => "child_num must be a Number" ];
    }

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

    // father_id
    if(empty($father_id)){
        $errors[] = ["father_id" => "father_id is required" ];
    } elseif(!is_numeric($father_id)){
        $errors[] = ["father_id" => "father_id must be a Number" ];
    }elseif(strlen($father_id) < 14){
        $errors[] = ["father_id" => "father_id must = 14 Numbers" ];
    }elseif(strlen($father_id) > 14){
        $errors[] = ["father_id" => "father_id must = 14 Numbers" ];
    }
    
    // father_job
    if(empty($father_job)){
        $errors[] = ["father_job" => "father_job is required" ];
    } elseif(is_numeric($father_job)){
        $errors[] = ["father_job" => "father_job must be a String" ]; 
    }

    // mother_id
    if(empty($mother_id)){
        $errors[] = ["mother_id" => "mother_id is required" ];
    } elseif(!is_numeric($mother_id)){
        $errors[] = ["mother_id" => "mother_id must be a Number" ];
    }elseif(strlen($mother_id) < 14){
        $errors[] = ["mother_id" => "mother_id must = 14 Numbers" ];
    }elseif(strlen($mother_id) > 14){
        $errors[] = ["mother_id" => "mother_id must = 14 Numbers" ];
    }

    // mother_job
    if(empty($mother_job)){
        $errors[] = ["mother_job" => "mother_job is required" ];
    } elseif(is_numeric($mother_job)){
        $errors[] = ["mother_job" => "mother_job must be a String" ]; 
    }


    if(empty($errors)){
         
        $query = "INSERT INTO baby VALUES('','$national_id','$name','$phone','$gender' ,'$blood_type' , '$weight' , '$birth_date' , '$government' , '$city' , '$center', '$mother_num', '$child_num', '$hospital_name', '$doctor_name', '$father_id', '$father_job', '$mother_id', '$mother_job')";
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

