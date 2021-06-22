<?php


class DBController
{
    //database connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "mobihub";

    //connection property
    public $conn = null;

    //calling constructor
    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_error){
            echo "Failed".$this->conn->connect_error;
        }
    }
    public function __destruct(){
        $this->closeConnection();
    }

    //closing the connection
    protected function closeConnection()
    {
        if ($this->conn != null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}
