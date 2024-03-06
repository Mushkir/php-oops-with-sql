<?php
class database
{
    // To establish connection need to give server name, username, password, DB name in PHP.
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbpassword = "";
    private $dbname = "userdata";
    protected $conn;


    // Constructor
    public function __construct()
    {
        try {
            // Need to connect Database.
            // * Here need to give Server name & Database name
            $dsn = "mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT);

            // Connect to the Database =>
            $this->conn = new PDO($dsn, $this->dbuser, $this->dbpassword, $options);
        } catch (PDOException $e) {
            echo "Connection Error : " . $e->getMessage();
        }
    }
}
