<?php

/**
 * Description of AddressCrud
 *
 * @author Mathew Holden
 */
class AddressCrud extends DB {
    
    
    function __construct() {
        parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root','');
    }
    //put your code here
     function createAddress($fullname,$email,$addressline1,$city,$state,$zip,$birthday ) {
      
    $stmt = $this->getDb()->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
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


     function readAll() {
       
    $stmt =  $this->getDb()->prepare("SELECT * FROM address");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
 
           
    }


}
