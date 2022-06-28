<?php
class Dbh {
    //properties
    private $hostname = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "zuriphp";

    $sql = file_get_contents('mysqldump.sql');
    
    /* execute multi query */
    $mysqli->multi_query($sql);

    //$mysqli = new mysqli("localhost", "root", " ", "zuriphp");

    // Create connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    //method 
    protected function connect() {  
        mysql_connect($this - > hostname, $this - > username, $this - > password, $this - > dbname) or die(mysql_error("zuriphp"));  
        mysql_select_db($this - > dbname) or die(mysql_error("zuriphp"));  
    };
};
