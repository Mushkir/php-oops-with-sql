<?php
require_once('./connect.php');

class User extends database
{

    protected $tableName = "usertable";

    // Function to Add users
    public function add($data)
    {
        if (!(empty($data))) {

            $fileds = $placeholder = [];

            foreach ($data as $field => $value) {

                $fileds[] = $field;
                $placeholder[] = ":{field}";
            }
        }

        $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placeholder) . ")";

        $stmt = $this->conn->prepare($sql);

        try {

            $this->conn->beginTransaction();
            $stmt->execute($data);

            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollBack();
        }
    }


    // Function to Get Rows
    // Display all the data
    public function getRows($start = 0, $limit = 4)
    {
        $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start}, {$limit}";

        // Prepare Statement
        $stmt = $this->conn->prepare($sql);

        // Execute Statement
        $stmt->execute();

        // Fetch All the data
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }

        return $results;
    }


    // Function to Get Single row
    // $field = id, name, email....
    // $value = 1, 'mus'.....
    public function getRow($field, $value)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE {$field} = :{$field}";

        // Prepare Statement
        $smtm = $this->conn->prepare($sql);

        // Execute Statement
        $smtm->execute();

        if ($smtm->rowCount() > 0) {

            $result = $smtm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }

        return $result;
    }



    // Function to Count Number of Rows
    public function getCount()
    {
        $sql = "SELECT COUNT(*) AS pcount FROM {$this->tableName}";

        // Prepare statement
        $stmt = $this->conn->prepare($sql);

        // Execute the statement
        $stmt->execute();


        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }



    // Function to Upload Photo



    // Function to Update



    // Function to Delete



    // Function for Search


}
