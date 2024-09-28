<?php
require_once "libs/Database.php";
require_once "libs/Session.php";
include "Views/Log/login.php";

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database();
    $query = "SELECT * FROM customers WHERE phone = '$username' AND customerNumber = '$password'";
    $result = $db->Select($query);
    if ($result && $result -> num_rows > 0)
    {
        Session::set('login', true);
        Session::set('username' , $username);
        header ("Location: index.php?page=productlines");
    }
    else{
        echo "Đăng nhập thất bại";
    }
}
?>