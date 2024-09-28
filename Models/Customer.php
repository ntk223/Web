<?php
require_once "libs/Database.php";
Class Customer
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    } 
    public function getAllCustomer()
    {
        $query ="SELECT * FROM customers";
        $result = $this->db->Select($query);
        return $result;
    }
    public function deleteCustomer($id)
    {
        $query = "DELETE FROM customers WHERE customerNumber = '$id'";
        $result = $this->db->Delete($query);
        return $result;
    }

    public function updateCustomer($id)
    {
        if( isset($_POST['submit']) )
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $query = "UPDATE customers SET customerName = '$name', phone = '$phone', addressLine1 = '$address' WHERE customerNumber = '$id'";
            $result = $this->db->Update($query);
            header("Location: index.php?page=customers&action=index");
            return $result;
        }
    }
    public function addCustomer()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $query = "INSERT INTO customers (customerName, phone, addressLine1) VALUES ('$name', '$phone', '$address')";
            $result = $this->db->Insert($query);
            header("Location: index.php?page=customers&action=index");
            return $result;
        }
    }
    public function getCustomerById($id)
    {
        $query = "SELECT * FROM customers WHERE customerNumber = '$id'";
        $result = $this->db->Select($query);
        $customer = $result->fetch_assoc();
        return $customer;
    }
}

?>