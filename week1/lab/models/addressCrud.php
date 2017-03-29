<?php


function readAllAddress()
{
 $db = dbconnect();
 
           
}

function  createAddress($fullname, $email, $addressline1, $city, $state, $zip, $address_id, $birthday)
{
   $db = dbconnect();
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline = :addressline, city = :city, state = :state, zip = :zip, address_id = :address_id,birthday = :birthday");
    $binds = array(
        ":phone" => $phone,
        ":phonetype" => $phoneType,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
   
}

