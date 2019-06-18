<?php


class DBConnect
{
    private $dns = 'mysql:host=localhost;dbname=quanlysanpham';
    private $userName = 'root';
    private $password = '123456@Abc';

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dns, $this->userName, $this->password);
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
        return $conn;
    }
}
