<?php

class Corporations extends DBSpring implements IRestModel {

    //put your code here
    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM corps");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }

    public function get($id) {

        $stmt = $this->getDB()->prepare("SELECT * FROM corps WHERE id = :id");
        $binds = array(":id" => $id);
        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return $results;
    }

    public function post($serverData)
    {
        $stmt = $this->getDB()->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, owner = :owner, phone = :phone, location = :location");
        $binds = array(
            ":corp"=> $serverData['corp'],
            ":incorp_dt"=> $serverData['incorp_dt'],
            ":owner"=> $serverData['owner'],
            ":phone"=> $serverData['phone'],
            ":email"=> $serverData['email'],
            ":location"=> $serverData['location'],
             );
         if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
        public function put($serverData)
    {
        $stmt = $this->getDB()->prepare("update INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, owner = :owner, phone = :phone, location = :location WHERE id=:id");
        $binds = array(
            ":id"=>$id,
            ":corp"=> $serverData['corp'],
            ":incorp_dt"=> $serverData['incorp_dt'],
            ":owner"=> $serverData['owner'],
            ":phone"=> $serverData['phone'],
            ":email"=> $serverData['email'],
            ":location"=> $serverData['location'],
             );
         if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    public function delete($id)
    {
        $stmt = $this->getDB()->prepare("DELETE FROM corps WHERE id=:id");
        $binds = array(
            ":id"=>$id,
        );
          if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    
}
