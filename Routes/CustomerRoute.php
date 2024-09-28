<?php
require_once "Controllers/CustomerController.php";
$action = isset($_GET['action']) ? $_GET['action'] : "index";
$id = isset($_GET['id']) ? $_GET['id'] : null;

$customer = new CustomerController();
switch ($action) {
    case 'index':
        $result = $customer->index();
        break;
    case 'delete':
        $result = $customer->delete($id);
        break;
    case 'update':
        $result = $customer->update($id);
        break;
    case 'add':
        $result = $customer->add();
        break;
    default:
        echo "action not found";
        break;
}

?>