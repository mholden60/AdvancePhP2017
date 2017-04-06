<?php

/**
 * Description of AddressCrud
 *
 * @author Mathew Holden
 */
class AddressCrud implements ICrud {
    //put your code here
    public function create() {
      
    $stmt = $this->getDb()->$db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
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

    public function delete() {
        $stmt = $db->prepare("DELETE * From Address WHERE address_id = $address_id");
    }

    public function read() {
        
    }

    public function readAll() {
       
    $stmt =  $this->getDb()->$db->prepare("SELECT * FROM address");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
 
           
    }

    public function update() {
        
    }

}
