<?php

class City
{
  protected $id;
  protected $name;
  
  public function __construct(
    $id = 0,
    $name = ''
  ) {
    $this->id = $id;
    $this->name = $name;
  }

  public function get($string)
  {
    return property_exists(__CLASS__, $string) ? $this->{$string} : false;
  }

  public function set($string, $value)
  {
    if (property_exists(__CLASS__, $string)) {
      $this->{$string} = $value;
      return true;
    } else {
      return false;
    }
  }

  public function list() 
  {
    try {
      $connection = new PDO("mysql:host=localhost;dbname=supportmf","root","root");

      $query = "SELECT * FROM cities ORDER BY name";
      
      if($rows = $connection->query($query)) {
        return $rows->fetchAll(PDO::FETCH_ASSOC);
      } else {
        return false;
      }
    } catch (PDOException $e) {
      print 'Error: '.$e->getMessage();
    }
  }
}
