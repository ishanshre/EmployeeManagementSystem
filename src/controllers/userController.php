<?php

class userController{
    public $model;

    public function __construct(){
        require(BASE_DIR."/models/user.php");
        $this->model = new User();
    }

    public function insert() {
        echo "Insert the user";
        $this->model->insert();
    }
}

?>