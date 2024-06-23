<?php
include "config.php";
include_once "Common.php";
if (isset($_POST['getCityByGov']) == "getCityByGov") {
    $gov_id = $_POST['gov_id'];
    $common = new Common();
    $cities = $common->getCityByGov($conn,$gov_id);
    $cityData = '<option value="">city</option>';
    if ($cities->num_rows>0){
        while ($city = $cities->fetch_object()) {
            $cityData .= '<option value="'.$city->id.'">'.$city->cityName.'</option>';
        }
    }
    echo "test^".$cityData;
}
if (isset($_POST['getStateByCity']) == "getStateByCity") {
    $city_id = $_POST['city_id'];
    $common = new Common();
    $states = $common->getStateByCity($conn,$city_id);
    $stateData = '<option value="">state</option>';
    if ($states->num_rows>0){
        while ($state = $states->fetch_object()) {
            $stateData .= '<option value="'.$state->id.'">'.$state->stateName.'</option>';
        }
    }
    echo "test^".$stateData;
}