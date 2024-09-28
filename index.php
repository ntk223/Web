<?php
include "header.php";
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
    if ($page != 'login')
    {
        echo "<div><a href='index.php?page=customers&action=index'>Khách hàng</a></div>";
        echo "<div><a href='index.php?page=productlines&action=index'>Danh mục sản phẩm</a></div>"; 
    }
    switch ($page)
    {
        case 'login':
            require_once "Controllers/LoginController.php";      
            break;
        case 'customers':
            require_once 'Routes/CustomerRoute.php';
            break;
        case 'productlines': // Sửa lại chính tả ở đây
            require_once 'Routes/ProductLineRoute.php';
            break;
        default:
        // require_once 'Routes/HomeRoute.php'; // Trang mặc định hoặc trang chủ
            break;
    }
include "footer.php";
?>


<!--
Cập nhật model: Thêm phương thức để lấy sản phẩm theo product line.
Cập nhật controller: Tạo phương thức trong controller để xử lý yêu cầu hiển thị sản phẩm theo product line.
Cập nhật route: Thêm route cho sản phẩm trong ProductLineRoute.php.
Tạo view: Tạo view để hiển thị sản phẩm cho từng product line.
Cập nhật liên kết: Thêm liên kết trong view danh sách product lines.
-->