<?php

class Database
{

    private $dsn = "mysql:host=localhost;dbname=php_oops_crud";

    private $user = 'root';
    private $password = '';
    protected $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $ex) {

            echo "Error: " . $ex->getMessage();
        }
    }

    // Insert Function
    public function insert($fName, $lName, $email, $phoneNo)
    {
        try {
            $query = "INSERT INTO users (first_name, last_name, email, phone) VALUES (:fName, :lName, :email, :phone)";

            $stmt = $this->connection->prepare($query);

            $stmt->execute(['fName' => $fName, 'lName' => $lName, 'email' => $email, 'phone' => $phoneNo]);

            return true;
        } catch (PDOException $ex) {
            echo "Error: " . $ex->getMessage();
        }
    }

    // Read Function
    public function read()
    {

        $data = [];

        $query = "SELECT * FROM users";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($results as $dataOfUsers) {
            $data[] = $dataOfUsers;
        }

        return $data;
    }

    // Update Function
    public function update($id, $fName, $lName, $email, $phone)
    {
        $query = "UPDATE users SET first_name = :fName, last_name = :lName, email = :email, phone = :phone WHERE id = :id";

        $stmt = $this->connection->prepare($query);

        $stmt->execute([':id' => $id, 'fName' => $fName, ':lName' => $lName, ':email' => $email, ':phone' => $phone]);

        return true;
    }

    public function delete($id)
    {
        $query = "DELETE FROM users WHERE id = :id";

        $stmt = $this->connection->prepare($query);

        $stmt->execute([':id' => $id]);

        return true;
    }

    // Get user by Id
    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = :id";

        $stmt = $this->connection->prepare($query);

        $stmt->execute([':id' => $id]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    // Count Total Rows
    public function countTotalRows()
    {
        $query = "SELECT * FROM users";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        $totalRows = $stmt->rowCount();

        return $totalRows;
    }
}

$db = new Database();

// echo var_dump($db->countTotalRows());
