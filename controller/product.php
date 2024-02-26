<?php

extract($_REQUEST);
include_once "model/productModel.php";
include_once "model/catelogyModel.php";
include_once "model/subCatelogyModel.php";
include_once "model/brandModel.php";

if (isset($mod)) {
    switch ($act) {
        case 'productlist':
            $show_prods = getAllProducts();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/productlist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'addproduct':
            $show_cats = getAllCatelogies();
            $show_subcats = getAllSubCatelogies();
            $show_brands = getAllBrands();
            if (isset($_POST['add_product'])) {
                $prod_name = $_POST['prod_name'];
                $prod_description = $_POST['prod_description'];
                $prod_image = $_FILES['prod_image']['name'];
                $prod_image_temp = $_FILES['prod_image']['tmp_name'];
                $prod_price = $_POST['prod_price'];
                $prod_discount_type = $_POST['prod_discount_type'];
                $prod_sub_catelogy = $_POST['prod_sub_catelogy'];
                $prod_brand = $_POST['prod_brand'];
                $prod_unit = $_POST['prod_unit'];
                $prod_sku = $_POST['prod_sku'];
                $prod_minQty = $_POST['prod_minQty'];
                $prod_qty = $_POST['prod_qty'];
                $prod_tax = $_POST['prod_tax'];
                $prod_status = $_POST['prod_status'];
                $prod_featured = "0";
                $prod_catelogy = $_POST['prod_catelogy'];


                move_uploaded_file($prod_image_temp, "images/$prod_image");
                addProduct($prod_name, $prod_description, $prod_image, $prod_price, $prod_discount_type, $prod_sub_catelogy, $prod_brand, $prod_unit, $prod_sku, $prod_minQty, $prod_qty, $prod_tax, $prod_status, $prod_featured, $prod_catelogy);
                header("Location: ?mod=product&act=addproduct");
            }
            if(isset($_POST['cancel'])) {
                header("Location: ?mod=product&act=productlist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/addproduct.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deleteproduct':
            if (isset($_GET['prod_id'])) {
                $prod_id = $_GET['prod_id'];
                deleteProduct($prod_id);

                header("Location: ?mod=product&act=productlist");
            }
            break;
        case 'updateproduct':
            if (isset($_GET['prod_id'])) {
                $prod_id = $_GET['prod_id'];
                $prod_catelogy_id = getProductById($prod_id)['MaDanhMuc'];
                $show_cats = getAllCatelogies();
                $show_prod_by_id = getProductById($prod_id);
                $show_subcats = getAllSubCatelogies();
                $show_brands = getAllBrands();
                $show_subcat_by_id = getSubCatelogyById($show_prod_by_id['SubCategory']);
                $show_brand_by_id = getBrandById($show_prod_by_id['Brand']);
                if (isset($_POST['update_product'])) {
                    $prod_name = $_POST['prod_name'];
                    $prod_description = $_POST['prod_description'];
                    $prod_image = $_FILES['prod_image']['name'];
                    $prod_image_temp = $_FILES['prod_image']['tmp_name'];
                    $prod_price = $_POST['prod_price'];
                    $prod_discount_type = $_POST['prod_discount_type'];
                    $prod_sub_catelogy = $_POST['prod_sub_catelogy'];
                    $prod_brand = $_POST['prod_brand'];
                    $prod_unit = $_POST['prod_unit'];
                    $prod_sku = $_POST['prod_sku'];
                    $prod_minQty = $_POST['prod_minQty'];
                    $prod_qty = $_POST['prod_qty'];
                    $prod_tax = $_POST['prod_tax'];
                    $prod_status = $_POST['prod_status'];
                    $prod_featured = "0";
                    $prod_catelogy = $_POST['prod_catelogy'];

                    if (empty($prod_image)) {

                        $prod_image = $show_prod_by_id['HinhAnh'];
                    }

                    move_uploaded_file($prod_image_temp, "images/$prod_image");
                    updateProduct($prod_id, $prod_name, $prod_description, $prod_image, $prod_price, $prod_discount_type, $prod_sub_catelogy, $prod_brand, $prod_unit, $prod_sku, $prod_minQty, $prod_qty, $prod_tax, $prod_status, $prod_featured, $prod_catelogy);
                    header("Location: ?mod=product&act=updateproduct&prod_id=$prod_id");
                }
                if(isset($_POST['cancel'])) {
                    header("Location: ?mod=product&act=productlist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updateproduct.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
