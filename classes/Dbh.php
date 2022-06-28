class Dbh {
    //properties
    private $hostname;
    private $username;
    private $password;
    private $dbname;

    $sql = file_get_contents('mysqldump.sql');

    $mysqli = new mysqli("localhost", "root", " ", "zuriphp");

    /* execute multi query */
    $mysqli->multi_query($sql);

    //method 
    protected function connect() {};
};
