<?php 
    include "../db/class/Database.php";

    class User {
        var $name;
        var $email;
        var $password;
        var $database;

        public function save() {
            $database = new Database();
            $database->insert($this->name, $this->email, $this->password);
        }
    }
?>