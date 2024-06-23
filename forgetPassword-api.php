<?php
require 'api.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $national_id      = $_POST["national_ID"];
  $pass             = $_POST["pass"];
  $pass_confirm     = $_POST["pass_confirm"];



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

  if(empty($pass)){
    $errors[] = ["password" => "password is required" ];
  } 
  elseif(strlen($pass) < 4){
    $errors[] = ["password" => "password must >= 4 characters" ];
  }
  if($pass != $pass_confirm){
    $errors[] = ["Passwords Matching" => "Password Does Not Match" ];
  }
  if(empty($errors)){
      $query = "update registeration set pass = '$pass' ,pass_confirm = '$pass_confirm' where national_ID ='$national_id'";
  
      $result = mysqli_query($conn, $query);
      $user = "SELECT national_ID FROM registeration WHERE  national_ID='$national_id'";
      
      if($result){
      
          // $user = mysqli_fetch_assoc($result);
          
          if($pass = $pass_confirm ){
            // $_SESSION["userId"] = $user['national_ID'];
            echo json_encode(["success" => true , "message" => "Password changed Successfully"]);
          }else{
            echo json_encode(["success" => false , "message" => "National ID Not Found"]);
        }
      
      } else{
          print_r(json_encode(["success" => false , "message" => "credentials  not correct"]));
      }
  } else{
    print_r(json_encode(["success" => false , "errors" => $errors]));
  }
  
} else{
  echo json_encode(["success" => false , "message" => "Method not allowed"]);

}

?>