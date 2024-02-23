<?php
session_start();
include_once "model/catelogyModel.php";
include_once "model/userModel.php";

$show_cats = getAllCatelogies();
if (!isset($mes)) {
    $mes = "";
}
if (!isset($_SESSION['id'])) {
    $_SESSION['id'] = null;
    $_SESSION['HoTen'] = null;
    $_SESSION['FirstName'] = null;
    $_SESSION['LastName'] = null;
    $_SESSION['Email'] = null;
    $_SESSION['UserName'] = null;
    $_SESSION['VaiTro'] = null;
    $_SESSION['Status'] = null;
    $_SESSION['HinhAnh'] = null;
    $_SESSION['MobileNumber'] = null;
}
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'home':
            if (isset($_POST['sign-in'])) {
                $username = strtolower($_POST['username']);
                $password = $_POST['password'];

                $checklogin = checkLogin($username, $password);
                if ($checklogin) {
                    $_SESSION['id'] = $checklogin['id'];
                    $_SESSION['HoTen'] = $checklogin['HoTen'];
                    $_SESSION['FirstName'] = $checklogin['FirstName'];
                    $_SESSION['LastName'] = $checklogin['LastName'];
                    $_SESSION['Email'] = $checklogin['Email'];
                    $_SESSION['UserName'] = $checklogin['UserName'];
                    $_SESSION['VaiTro'] = $checklogin['VaiTro'];
                    $_SESSION['Status'] = $checklogin['Status'];
                    $_SESSION['HinhAnh'] = $checklogin['HinhAnh'];
                    $_SESSION['MobileNumber'] = $checklogin['MobileNumber'];
                    echo "<script type='text/javascript'>alert('Login Successfully!');</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Login Failled! Please Login Again!');</script>";
                    $mes = "Login Failled!";
                }
            }

            if (isset($_POST['register'])) {
                $fullName = $_POST['fullName'];
                $username = strtolower($_POST['username']);
                $password = $_POST['password'];

                if ($fullName !== "" && $username !== "" && $password !== "") {
                    createUser_02($fullName, $username, $password);
                    echo "<script>alert('Register Successfully!');</script>";
                    $mes = "Register Successfully!";
                } else {
                    echo "<script>alert('Please fill full fielded!');</script>";
                    $mes = "Register Failled!";
                }
            }
            include_once "view/header.php";
            include_once "view/home.php";
            include_once "view/footer.php";
            break;
        case 'shop':
            include_once "view/header.php";
            include_once "view/shop.php";
            include_once "view/footer.php";
            break;
        case 'productDetails':
            include_once "view/header.php";
            include_once "view/productDetails.php";
            include_once "view/footer.php";
            break;
        case 'cart':
            include_once "view/header.php";
            include_once "view/cart.php";
            include_once "view/footer.php";
            break;
        case 'shipping':
            include_once "view/header.php";
            include_once "view/shipping.php";
            include_once "view/footer.php";
            break;
        case 'payment':
            include_once "view/header.php";
            include_once "view/payment.php";
            include_once "view/footer.php";
            break;
        case 'messageSuccessful':
            include_once "view/header.php";
            include_once "view/messageSuccessful.php";
            include_once "view/footer.php";
            break;
        case 'blog':
            include_once "view/header.php";
            include_once "view/blog.php";
            include_once "view/footer.php";
            break;
        case 'blogDetails':
            include_once "view/header.php";
            include_once "view/blogDetails.php";
            include_once "view/footer.php";
            break;
        case 'admin':
            include_once "view/admin/admin-header.php";
            include_once "view/admin/admin.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'adminlogin':
            if (isset($_POST['admin-sign-in'])) {
                $username = strtolower($_POST['username']);
                $password = $_POST['password'];

                $checklogin = checkLogin($username, $password);
                if ($checklogin) {
                    $_SESSION['id'] = $checklogin['id'];
                    $_SESSION['HoTen'] = $checklogin['HoTen'];
                    $_SESSION['FirstName'] = $checklogin['FirstName'];
                    $_SESSION['LastName'] = $checklogin['LastName'];
                    $_SESSION['Email'] = $checklogin['Email'];
                    $_SESSION['UserName'] = $checklogin['UserName'];
                    $_SESSION['VaiTro'] = $checklogin['VaiTro'];
                    $_SESSION['Status'] = $checklogin['Status'];
                    $_SESSION['HinhAnh'] = $checklogin['HinhAnh'];
                    $_SESSION['MobileNumber'] = $checklogin['MobileNumber'];
                    $_SESSION['MatKhau'] = $checklogin['MatKhau'];
                     header("Location: ?mod=page&act=admin");
                    echo "<script type='text/javascript'>alert('Login Successfully!');</script>";
                   
                } else {
                    echo "<script type='text/javascript'>alert('Login Failled! Please Login Again!');</script>";
                    $mes = "Login Failled!";
                }
            }
            include_once "view/admin/admin-login.php";
            break;
    }
}
