<?php

    require(BASE_DIR."/connection/connection.php");
    
    class User extends Connection{
        public $id;
        public $first_name;
        public $last_name;
        public $username;
        public $email;
        public $password;
        public $created_at;

        public $model;

        public function __construct() {
            $this->model = new Connection();
        }

        public function insert(){
            //$query = "INSERT INTO users (username, password) VALUES $username, $password";
            $query = "INSERT INTO users (username, email, password) VALUES ('ishan', 'ishan', 'email');";
            $this->model->executeQuery($query);
        }
    }

?>