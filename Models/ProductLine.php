<?php
require_once "libs/Database.php";
Class ProductLine
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllProductLine()
    {
        $query = "SELECT * FROM productlines";
        return $this->db->Select($query);
    }
    public function getProductLineById($id)
    {
        $query = "SELECT * FROM productlines WHERE productLine = '$id'";
        $result = $this->db->Select($query);
        return $result->fetch_assoc();
        
        
    }
    public function deleteProductLine($id)
    {
        $query ="DELETE FROM productlines WHERE productLine = '$id'";
        $result = $this->db->Delete($query);
        return $result;
    }
    public function updateProductLine($id)
    {
        if ( isset($_POST['submit']) ){
            $textDescription = $_POST['textDescription'];
        
            $query = "UPDATE productlines SET textDescription = '$textDescription' WHERE productLine = '$id'";
            $result = $this->db->Update($query);
            header ("Location: index.php?page=productlines");
        }
    }
    public function addProductLine()
    {
        if ( isset($_POST['submit']) ){
            $productLine = $_POST['productLine'];
            $textDescription = $_POST['textDescription'];
        
            $query = "INSERT INTO productlines(productLine, textDescription) VALUES ('$productLine', '$textDescription')";
            $result = $this->db->Insert($query);
            header ("Location: index.php?page=productlines");
        }

    }
    public function getProductByProductLine($producline)
    {
        $query = "SELECT * FROM products WHERE productline = '$producline'";
        return $this->db->Select($query);
    }
}
?>