<?php
require_once "Models/Customer.php";
Class CustomerController
{
    private $customerModel;
    public function __construct()
    {
        $this->customerModel = new Customer();
    }
    public function index()
    {
        $result = $this->customerModel->getAllCustomer();
        include 'Views/Customers/CustomerList.php';
    }
    public function delete($id)
    {
        $result = $this->customerModel->deleteCustomer($id);
        if ($result) {
            header("Location: index.php?page=customers&action=index");
        } else {
            echo "Delete fail";
        }
    }
   
    public function update($id)
    {
        $customer = $this->customerModel->getCustomerById($id);
        include 'Views/Customers/CustomerUpdate.php';
        $result = $this->customerModel->updateCustomer($id);

    }
    public function add()
    {
        include 'Views/Customers/CustomerAdd.php';
        $result = $this->customerModel->addCustomer();
    }
}



?>