<?php

class Talent
{
  protected $id;
  protected $name;
  protected $city;
  protected $email;
  protected $phone;
  
  public function __construct(
    $id = 0,
    $name = '',
    $city = 0,
    $email = '',
    $phone = ''
  ) {
    $this->id = $id;
    $this->name = $name;
    $this->city = $city;
    $this->email = $email;
    $this->phone = $phone;
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
      $configFile = 'env.ini';
      $env = parse_ini_file($configFile);
      $connection = new PDO("mysql:host={$env['host']};dbname={$env['database']}",$env['user'],$env['pass']);

      $query = "SELECT 
                  t.id,
                  t.name,
                  c.name AS city,
                  t.email,
                  t.phone
                FROM talents t
                LEFT JOIN cities c ON c.id = t.city
                ORDER BY t.name";
      if($rows = $connection->query($query)){
        return $rows->fetchAll(PDO::FETCH_ASSOC);
      } else {
        return false;
      }
    } catch (PDOException $e) {
      print 'Error: '.$e->getMessage();
    }
  }

  public function save() 
  {
    if($this->id == 0){
      try {
        $configFile = 'env.ini';
        $env = parse_ini_file($configFile);
        $connection = new PDO("mysql:host={$env['host']};dbname={$env['database']}",$env['user'],$env['pass']);

        $query = "INSERT INTO talents(name,city,email) VALUE(:name,:city,:email)";
        $statement = $connection->prepare($query);
        
        $binding = [
          ':name' => $this->name,
          ':city' => $this->city,
          ':email' => $this->email
        ];
        if($statement->execute($binding)) {
          return $connection->lastInsertId();
        } else {
          return false;
        }
      } catch (PDOException $e) {
        print 'Error: '.$e->getMessage();
      }
    }
  }
}
