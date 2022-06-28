<?php
class Dbh {
    //properties
    private $hostname = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "zuriphp";

    //method 
    protected function connect() { 
        $conn = new mysqli ($this -> hostname, $this -> username, $this -> password, $this -> dbname) or die(mysql_error("zuriphp"));  
    }
};
