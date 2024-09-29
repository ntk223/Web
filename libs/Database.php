<?php
require_once 'config/Config.php';
Class Database{
    public $host=DB_HOST;
    public $user=DB_USER;
    public $pass=DB_PASS;
    public $dbname=DB_NAME;

    public $conn;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }    
    public function connectDB()
    {
        $this->conn= new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ( !$this->conn){
            $this->error="Connection fail".$this->conn->connect_error;
            return false;
        }
    }
    // read or select data
    public function Select($query)
    {
        $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
        if ($result->num_rows > 0 ) return $result;
        else return false;
    }

    // insert data
    public function Insert($query)
    {
        $insert_row = $this->conn->query($query) or die($this->conn->error.__LINE__);
        // neu dung tra ve true
        if ($insert_row) return $insert_row;
        else return false;
    }
    // update data
    public function Update($query)
    {
        $update_row = $this->conn->query($query) or die($this->conn->error.__LINE__);
        // tra ve gia tri khac 0
        if ($update_row) return $update_row;
        else return false;
    }
    // delete data
    public function Delete($query)
    {
        $delete_row = $this->conn->query($query) or die($this->conn->error.__LINE__);
        if ( $delete_row) return $delete_row;
        else return false;
    }
}
?>