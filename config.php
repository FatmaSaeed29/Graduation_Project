<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "healthcare");

if(!$conn){
    echo("Not Connected To Database !");
}
?>








