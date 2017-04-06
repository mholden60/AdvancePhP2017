<?php

class Crud extends DB {
    //put your code here
    
    protected $fullname;
    protected $email;
    protected $addressline1;
    protected $city;
    protected $state;
    protected $zip;
    protected $birthday;
    
    function __construct() 
    {    
          parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '') ;      
    }
    function getAllAddresses()
    {
        $stmt = $this->getDb->prepare("SELECT * FROM address");
    }
    
    function  createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)
{
  
    $stmt = $this->getDB()->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
    $binds = array(
        ":fullname" => $fullname,
        ":email" => $email,
         ":addressline1" => $addressline1,
         ":city" => $city,
         ":state" => $state,
         ":zip" => $zip,
         ":birthday" => $birthday
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
   
}
}
