<?php 

require 'api.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $national_id = $_POST["national_ID"];
    $pass = $_POST['pass'];

    $errors = [];
    if(empty($national_id)){
        $errors[] = ["national_ID" => "National ID is required" ];
    } elseif(!is_numeric($national_id)){
        $errors[] = ["national_ID" => "National ID must be a Number" ];

    }elseif(strlen($national_id) < 14){
        $errors[] = ["national_ID" => "National ID must = 14 Numbers" ];
    }elseif(strlen($national_id) > 14){
        $errors[] = ["national_ID" => "National ID must = 14 Numbers" ];
    }

    if(empty($pass)){
        $errors[] = ["Password" => "password is required" ];
    } 
    elseif(strlen($pass) < 4){
        $errors[] = ["Password" => "password must >= 4 characters" ];
    }
    
    if(empty($errors)){
        $query = "SELECT * FROM registeration WHERE national_ID ='$national_id'";
    
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1){
        
            $user = mysqli_fetch_assoc($result);
            
            if($user['pass'] == $pass){
                $_SESSION["userId"] = $user['national_ID'];       
                echo json_encode(["success" => true , "message" => "seccessfully login" , "data" => $user]);
            } else{
                echo json_encode(["success" => false , "message" => "Password isn't correct"]);
            }
        
        
        } else{
            echo json_encode(["success" => false , "message" => "National ID Not Found"]);
        }
    } else{
        print_r(json_encode(["success" => false , "errors" => $errors]));
    }
    
} else{
    print_r(json_encode(["success" => false , "message" => "Method Is Not Allowed"]));

}

