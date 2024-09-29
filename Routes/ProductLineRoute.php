<?php
require_once "Controllers/ProductLineController.php";
$action = isset($_GET['action']) ? $_GET['action'] : "index";
$id = isset($_GET['id']) ? $_GET['id'] : null;
$productline = new ProductController();
switch ($action) {
    case 'index':
        $result = $productline->index();
        break;
    case 'delete':
        $result = $productline->delete($id);
        break;
    case 'update':
        $result = $productline->update($id);
        break;
    case 'add':
        $result = $productline->add();
        break;
    case 'showproduct':
        $result = $productline->showProduct($id);
        break;
    default:
        echo "action not found";
        break;
}
?>