<?php 

require 'api.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $national_id    = $_POST["national_id"] ;
    $name           = $_POST["name"];
    $email          = $_POST["email"];
    $phone          = $_POST["phone"];
    $gender         = $_POST["gender"];
    $job            = $_POST["job"];
    $job_num        = $_POST["job_num"];
    $pass           = $_POST["pass"];
    $pass_confirm   = $_POST["pass_confirm"];
    $birthdate      = $_POST["birthdate"];


    $errors = [];

    // National ID
    if(empty($national_id)){
        $errors[] = ["national_ID" => "National ID is required" ];
    }elseif(!is_numeric($national_id)){
        $errors[] = ["national_ID" => "National ID must be a Number" ];  
    }elseif(strlen($national_id) < 14){
        $errors[] = ["national_ID" => "National ID must = 14 Numbers" ];
    }elseif(strlen($national_id) > 14){
        $errors[] = ["national_ID" => "National ID must = 14 Numbers" ];
    }

    // Name
    if(empty($name)){
        $errors[] = ["Name" => "Name is required" ];
    } elseif(is_numeric($name)){
        $errors[] = ["Name" => "Name must be a string" ];
    }

    // Email
    if(empty($email)){
        $errors[] = ["Name" => "Email is required" ];
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = ["Email" => "$email not valid email address" ];

    }

    // Phone
    if(empty($phone)){
        $errors[] = ["Phone" => "Phone is required" ];
    } elseif(!is_numeric($phone)){
        $errors[] = ["Phone" => "phone must be a Number" ];

    }

    // Gender
    if(empty($gender)){
        $errors[] = ["Gender" => "gender is required" ];
    }

    // job
    if(empty($job)){
        $errors[] = ["Job" => "job is required" ];
    } elseif(is_numeric($job)){
        $errors[] = ["Job" => "job must be a string" ];

    }

    // job_num
    if(empty($job_num)){
        $errors[] = ["job_num" => "job_num is required" ];
    } elseif(!is_numeric($job_num)){
        $errors[] = ["job_num" => "job_num must be a Number" ];

    }

    // pass
    if(empty($pass)){
        $errors[] = ["Password" => "Password is required" ];
    }elseif(strlen($pass) < 4){
        $errors[] = ["Password" => "Password must >= 4 characters" ];
    }

    // pass_confirm
    if(empty($pass_confirm)){
        $errors[] = ["Password Confirmation" => "Password Confirmation is required" ];
    } 

    // birthdate
    if(empty($birthdate)){
        $errors[] = ["birthdate" => "birthdate is required" ];
    } 

    if($pass != $pass_confirm){
        $errors[] = ["Passwords Matching" => "Password Does Not Match" ];
    } 

    
    
    if(empty($errors)){
        $query = "SELECT * FROM registeration where national_ID ='$national_id'";
    
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1){
            echo json_encode(["success" => false , "message" => "National ID already exists"]);

    
        
        } else{
        $query = "INSERT INTO registeration  VALUES('','$national_id', '$name', '$email' ,'$phone' ,'$gender', '$job', '$job_num' , '$pass' , '$pass_confirm' , '$birthdate')";
        $result = mysqli_query($conn, $query);
            
        if($result){
            echo json_encode(["success" => true , "message" => "Successfully Registered"]);
        } else{
            echo json_encode(["success" => false , "message" => "Error while registering"]);
        }

        }
    } else{
        print_r(json_encode(["success" => false , "errors" => $errors]));
    }
    
} else{
    echo json_encode(["success" => false , "message" => "Method is not allowed"]);

}

