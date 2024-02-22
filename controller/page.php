<?php




extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'home':
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
    }
}
