<?php

extract($_REQUEST);
include_once "model/brandModel.php";

if (isset($mod)) {
    switch ($act) {
        case 'brandlist':
            $show_brands = getAllBrands();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/brandlist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'addbrand':
            if (isset($_POST['add_brand'])) {

                $brand_name = $_POST['brand_name'];
                $brand_description = $_POST['brand_description'];
                $brand_image = $_FILES['brand_image']['name'];
                $brand_image_temp = $_FILES['brand_image']['tmp_name'];


                move_uploaded_file($brand_image_temp, "images/$brand_image");
                createBrand($brand_name, $brand_description, $brand_image);

                header("Location: ?mod=brand&act=addbrand");
            }
            if (isset($_POST['cancel'])) {

                header("Location: ?mod=brand&act=brandlist");            
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/addbrand.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deletebrand':
            if (isset($_GET['brand_id'])) {
                $brand_id = $_GET['brand_id'];
                deleteBrand($brand_id);

                header("Location: ?mod=brand&act=brandlist");
            }
            break;
        case 'updatebrand':
            if (isset($_GET['brand_id'])) {
                $brand_id = $_GET['brand_id'];
                $show_brand = getBrandById($brand_id);
                if (isset($_POST['update_brand'])) {
                    $brand_name = $_POST['brand_name'];
                    $brand_description = $_POST['brand_description'];
                    $brand_image = $_FILES['brand_image']['name'];
                    $brand_image_temp = $_FILES['brand_image']['tmp_name'];

                    if (empty($brand_image)) {
                        $brand_image = $show_brand['brand_image'];
                    }

                    move_uploaded_file($brand_image_temp, "images/$brand_image");
                    updateBrand($brand_id, $brand_name, $brand_description, $brand_image);
                    header("Location: ?mod=brand&act=updatebrand&brand_id=$brand_id");
                }
                if (isset($_POST['cancel'])) {

                    header("Location: ?mod=brand&act=brandlist");            
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updatebrand.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
