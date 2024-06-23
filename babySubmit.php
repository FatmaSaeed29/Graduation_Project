<?php
    require 'config.php';
    
    if(empty($_SESSION["userId"])){
    header("Location: login.php");
    }
    if($_GET){
        $dataSubmit = json_decode($_GET['dataSubmit']);
    }

    if (isset($_POST["submit"])){
    $mother_num  = $_POST["mother_num"];
    $child_num  = $_POST["child_num"];
    $hospital_name  = $_POST["hospital_name"];
    $doctor_name  = $_POST["doctor_name"];
    $father_id  = $_POST["father_id"];
    $mother_id  = $_POST["mother_id"];
    $mother_job  = $_POST["mother_job"];
    $father_job  = $_POST["father_job"];

    $sql1= "INSERT INTO baby VALUES('','$dataSubmit->national_id','$dataSubmit->name','$dataSubmit->phone','$dataSubmit->gender' ,'$dataSubmit->blood_type' , '$dataSubmit->weight' , '$dataSubmit->birth_date' , '$dataSubmit->government' , '$dataSubmit->city' , '$dataSubmit->center', '$mother_num', '$child_num', '$hospital_name', '$doctor_name', '$father_id', '$father_job', '$mother_id', '$mother_job')";
    $result = mysqli_query($conn, $sql1);
        if ($result) {
            echo "<script>alert ('Registration Successfully Done'); </script>";
            header("Location: ./service.php");
            exit(); 
        } else {
            "<script> alert('Data Does Not Inserted'); </script>";
            header("Location: ./BabyForm1.php"); 
        }

    }

?>