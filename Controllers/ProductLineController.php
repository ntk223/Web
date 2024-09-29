<?php
require_once "Models/ProductLine.php";
Class ProductController
{
    private $productLineModel;

    public function __construct(){
        $this->productLineModel = new ProductLine();
    }
    public function index()
    {
        $result = $this->productLineModel->getAllProductLine();
        include 'Views/ProductLines/ProductLineList.php';
    }
    public function delete($id)
    {
        $result = $this->productLineModel->deleteProductLine($id);
        header("Location: index.php?page=productlines");
    }
    public function update($id)
    {
        $productline = $this->productLineModel->getProductLineById($id);
        include 'Views/ProductLines/ProductLineUpdate.php';
        $result = $this->productLineModel->updateProductLine($id);
    }
    public function add()
    {
        include 'Views/ProductLines/ProductLineAdd.php';
        $result = $this->productLineModel->addProductLine();
    }
    public function showProduct($productline)
    {
        $result = $this->productLineModel->getProductByProductLine($productline);
        include 'Views/Products/ProductList.php';
    }


    
}
?>
    