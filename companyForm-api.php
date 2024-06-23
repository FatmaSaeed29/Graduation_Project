<?php 

require 'api.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_SESSION["userId"])){

    $userId                 = $_SESSION['userId'];
    $company_activity       = $_POST["company_activity"];
    $tax                    = $_POST["tax"];
    $commercial_num         = $_POST["commercial_num"];
    $employee_num           = $_POST["employee_num"];
    $request_num            = $_POST["request_num"];
    $request_date           = $_POST["request_date"];
    $category               = $_POST["category"];
    $email                  = $_POST["email"];
    $gov                    = $_POST["gov"];
    $city                   = $_POST["city"];
    $state                  = $_POST["state"];
    $address                = $_POST["address"];
    $link                   = $_POST["link"];

    
    $errors = [];
    
    // Company Activity
    if(empty($company_activity)){
        $errors[] = ["Company Activity" => "Company Activity is required" ];
    } elseif(is_numeric($company_activity)){
        $errors[] = ["Company Activity" => "Company Activity must be a String" ];
    }

    // tax
    if(empty($tax)){
        $errors[] = ["Tax" => "Tax is required" ];
    } elseif(!is_numeric($tax)){
        $errors[] = ["Tax" => "Tax must be a Number" ];
    }

    // commercial num
    if(empty($commercial_num)){
        $errors[] = ["commercial num" => "commercial num is required" ];
    } elseif(!is_numeric($commercial_num)){
        $errors[] = ["Commercial Num" => "Commercial Num must be a Number" ];
    }

    // employee_num
    if(empty($employee_num)){
        $errors[] = ["employee num" => "employee num is required" ];
    } elseif(!is_numeric($employee_num)){
        $errors[] = ["employee num" => "employee Num must be a Number" ];
    }

    // request_num
    if(empty($request_num)){
        $errors[] = ["request num" => "request num  is required" ];
    } elseif(!is_numeric($request_num)){
        $errors[] = ["request num" => "request num must be a Number" ];
    }

    // request_date
    if(empty($request_date)){
        $errors[] = ["request data" => "request data is required" ];
    } 

    // category
    if(empty($category)){
        $errors[] = ["category" => "category is required" ];
    } elseif(is_numeric($category)){
        $errors[] = ["category" => "category must be a String" ];
    } 

    // Email
    if(empty($email)){
        $errors[] = ["Email" => "Email is required" ];
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = ["Email" => "$email not valid email address" ];

    }

    // gov
    if(empty($gov)){
        $errors[] = ["gov" => "gov is required" ];
    }

    // city
    if(empty($city)){
        $errors[] = ["city" => "city is required" ];
    }

    // state
    if(empty($state)){
        $errors[] = ["state" => "state is required" ];
    }

    // address
    if(empty($address)){
        $errors[] = ["address" => "address is required" ];
    } 

    // link
    if(empty($link)){
        $errors[] = ["link" => "link is required" ];
    } 


    
    
    if(empty($errors)){
         
        $query = "INSERT INTO company VALUES('','$userId','$company_activity','$tax','$commercial_num','$employee_num' ,'$request_num' , '$request_date' , '$category' , '$email' , '$gov' , '$city' , '$state' , '$address', '$link' )";
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
