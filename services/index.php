<?php

if(isset($_GET['a'])) {
  $a = $_GET['a'];

  if($a == 'getCities') {
    $response = [
      'cities' => []
    ];

    include_once 'city.class.php';
    $city_ = new City;
    $cities = $city_->list();
    // if(is_array($cities)) 
    $response['cities'] = $cities;

    echo json_encode($response);
  }
  if($a == 'getTalents') {
    $response = [
      'talents' => []
    ];

    include_once 'talent.class.php';
    $talent_ = new Talent;
    $talents = $talent_->list();
    // if(is_array($talents)) 
    $response['talents'] = $talents;

    echo json_encode($response);
  }
}

if(isset($_POST['a'])) {
  $a = $_POST['a'];

  if($a == 'saveTalent') {
    $response = [
      'talent_id' => 0
    ];

    if(isset($_POST['talent'])) {
      include_once 'talent.class.php';

      $talent = $_POST['talent'];

      $talent_ = new Talent;
      $talent_->set('name', $talent['name']);
      $talent_->set('city', $talent['city']);
      $talent_->set('phone', $talent['phone']);
      $talentId = $talent_->save();

      $response['talent_id'] = $talentId;
    }

    echo json_encode($response);
  }
}
