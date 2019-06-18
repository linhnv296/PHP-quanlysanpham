<?php
include_once "DBConnect.php";

class Product
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DBConnect();
        $this->connection->connect();

    }

    public function add($id, $name, $price, $desc)
    {
        $sql = 'INSERT INTO `products` (`productName`, `price`, `decreption`) VALUES (?, ?, ?)';
        $statement = $this->connection->connect()->prepare($sql);
        var_dump($statement);
//        $statement->bindParam(1, $id);
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $price);
        $statement->bindParam(3, $desc);
        $statement->execute();
        header('Location: ../index.php');
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `products`';
        $statement = $this->connection->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM `products` where `id`=$id";
        $statement = $this->connection->connect()->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $statement = $this->connection->connect()->prepare($sql);
        $statement->execute();
    }
    public function edit($id,$name, $price, $desc)
    {

        $sql = "UPDATE `products` SET `productName` = '".$name."', `price`=$price, `decreption`= '".$desc."' WHERE `id` = $id";
        $statement = $this->connection->connect()->prepare($sql);
        $statement->execute();
        echo $sql;
        header('Location: ../index.php');
    }
}



