<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accounts
 *
 * @author Mathew Holden
 */
class Accounts extends DBSpring {

    
    public function signup($email, $password) {
        $db = $this->getDB();
        $stmt = $db->prepare("INSERT INTO users SET email = :email, password = :password, created = NOW()");
        $binds = array(
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function login($email, $password) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");

        $binds = array(
            ":email" => $email
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $results['password'])) {
                return $results['user_id'];
            }
            return false;
        }

        return 0;
    }

    public function getUserEmailByUserID($user_id) {
        
$stmt = $this->getDb()->prepare("SELECT email FROM `users` WHERE user_id = :user_id");
$binds = array(
    ":user_id" => $user_id
);
            $results = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
       $results = $stmt->fetch(PDO::FETCH_ASSOC);
       return $results['email'];
    }
    return "";

}
//**********************START HERE*******************************
public function checkEmail($email) {
    $stmt = $this->getDb()->prepare("SELECT email FROM `users` WHERE email = :email");
    $binds = array(
        ""
    );
}
}