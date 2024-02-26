<?php
ob_start();
session_start();


extract($_REQUEST);
if (isset($mod)) {
    switch ($mod) {
        case 'page':
            include_once "controller/page.php";
            break;
        case 'category':
            include_once "controller/category.php";
            break; 
        case 'product':
            include_once "controller/product.php";
            break;  
        case 'subcategory':
            include_once "controller/subcategory.php";
            break;      
        case 'brand':
            include_once "controller/brand.php";
            break; 
        case 'blog':
            include_once "controller/blog.php";
            break; 
        case 'user':
            include_once "controller/user.php";
            break;                                                                     
        default:
            # code...
            break;
    }
} else {
    header("Location: ?mod=page&act=home");
}