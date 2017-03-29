<?php


function readAllAddress()
{
 $db = dbconnect();
 
           
}

function  createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)
{
   $db = dbconnect();
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline = :addressline, city = :city, state = :state, zip = :zip, birthday = :birthday");
    $binds = array(
        ":fullname" => $fullname,
        ":email" => $email,
         ":addressline1" => $addressline1,
         ":city" => $city,
         ":state" => $state,
         ":zip" => $zip,
         ":birthday" => $birthday,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
   
}

function getAllAddress() {
    
}

