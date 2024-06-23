<?php
/**
 * Created by PhpStorm.
 * User: Ankit
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common
{
  public function getGov($conn)
  {
      $mainQuery = "SELECT * FROM gov";
      $result1 = $conn->query($mainQuery) or die("Error in main Query".$conn->error);
      return $result1;
  }

  public function getCityByGov($conn,$gov_id){
      $query = "SELECT * FROM city WHERE gov_id='$gov_id'";
      $result = $conn->query($query) or die("Error in  Query".$conn->error);
      return $result;
  }

  public function getStateByCity($conn,$city_id){
      $query = "SELECT * FROM state WHERE city_id='$city_id'";
      $result = $conn->query($query) or die("Error in  Query".$conn->error);
      return $result;
  }
}