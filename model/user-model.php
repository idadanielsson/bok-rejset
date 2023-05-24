<?php

require_once 'classes/db.php';


class UserModel extends DB {

    protected $table = "users";

    public function getAllUsers(){
        return $this->getAll($this->table);
    }

    public function addUser(string $name){
        $sql = "INSERT INTO {$this->table} (name) VALUES (?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$name]);
    }
}
?>