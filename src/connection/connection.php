<?php

    class Connection {
        protected $_link;
        public function __construct() {
            require_once(BASE_DIR . "/config/config.php");
            $this->_link = new mysqli(DBHost, DBUsername, DBPassword, DBName);
            if($this->_link->connect_error){
                echo "Something went wrong ".$this->_link->connect_error;
            } 
        }

        public function fetchAll($query) {
            $result = $this->_link->query($query);
            if($result==true) {
                $resultArray = array();
                while ($row = $result->fetch_assoc()) {
                    $resultArray[] = $row;
                }
                return $resultArray;
            } 
            
            echo "Error in fetching row".$this->_link->connect_error;
            
            
        }

        public function executeQuery($query) {
            $result = $this->_link->query($query);
            if($result===true) {
                echo "New row insert";
            } else {
                echo "row inserted not".$this->_link->connect_error;
            }

        }
    }


?>