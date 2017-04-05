<?php

/**
 * Description of AddressCrud
 *
 * @author Mathew Holden
 */
class AddressCrud implements ICrud {
    //put your code here
    public function create() {
      
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
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
        
    }

    public function read() {
        
    }

    public function readAll() {
        
    }

    public function update() {
        
    }

}
