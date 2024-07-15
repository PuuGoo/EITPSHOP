<?php

include_once "model/connectDB.php";


function getAllProducts()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY id desc";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsByBrand($brand)
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY id desc WHERE Brand = $brand ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsLimit($limit)
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY id desc LIMIT $limit";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}



function getAllProductsAZ()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY TenSanPham asc ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsZA()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY TenSanPham desc ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsPriceAZ()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY Gia asc ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsPriceZA()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY Gia desc ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsDateAZ()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY NgayThem asc ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllProductsDateZA()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham ORDER BY NgayThem desc ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getProductById($prod_id)
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham WHERE id = $prod_id";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function getFeaturedProducts()
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham WHERE NoiBat = '1' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getFeaturedProductsLimit($limit)
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham WHERE NoiBat = '1' LIMIT $limit ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getCatelogyProducts($MaDanhMuc)
{

    $conn = connect();
    $sql = "SELECT * FROM sanpham WHERE MaDanhMuc = $MaDanhMuc ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function addProduct($prod_name, $prod_description, $prod_image, $prod_price, $prod_discount_type, $prod_sub_catelogy, $prod_brand, $prod_unit, $prod_sku, $prod_minQty, $prod_qty, $prod_tax, $prod_status, $prod_featured, $prod_catelogy)
{
    $conn = connect();
    $sql = "INSERT INTO sanpham(TenSanPham, MoTa, HinhAnh, Gia, LoaiGiamGia, SubCategory, Brand, Unit, SKU, MinQty, Qty, Tax, Status, NoiBat, NgayThem, MaDanhMuc) ";
    $sql .= "VALUES ('$prod_name', '$prod_description', '$prod_image', 
    '$prod_price', '$prod_discount_type', '$prod_sub_catelogy', '$prod_brand', '$prod_unit', '$prod_sku', '$prod_minQty', '$prod_qty', '$prod_tax', '$prod_status', '$prod_featured', now(), '$prod_catelogy') ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteProduct($prod_id)
{
    $conn = connect();
    $sql = "DELETE FROM sanpham WHERE id = $prod_id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function
updateProduct($prod_id, $prod_name, $prod_description, $prod_image, $prod_price, $prod_discount_type, $prod_sub_catelogy, $prod_brand, $prod_unit, $prod_sku, $prod_minQty, $prod_qty, $prod_tax, $prod_status, $prod_featured, $prod_catelogy)
{
    $conn = connect();
    $sql = "UPDATE sanpham SET ";
    $sql .= "TenSanPham = '$prod_name', ";
    $sql .= "MoTa = '$prod_description', ";
    $sql .= "HinhAnh = '$prod_image', ";
    $sql .= "Gia = '$prod_price', ";
    $sql .= "LoaiGiamGia = '$prod_discount_type', ";
    $sql .= "SubCategory = '$prod_sub_catelogy', ";
    $sql .= "Brand = '$prod_brand', ";
    $sql .= "Unit = '$prod_unit', ";
    $sql .= "SKU = '$prod_sku', ";
    $sql .= "MinQty = '$prod_minQty', ";
    $sql .= "Qty = '$prod_qty', ";
    $sql .= "Tax = '$prod_tax', ";
    $sql .= "Status = '$prod_status', ";
    $sql .= "NoiBat = '$prod_featured', ";
    $sql .= "MaDanhMuc  = '$prod_catelogy' ";
    $sql .= "WHERE id = $prod_id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countProducts()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM sanpham ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}

function changeStatus($id, $status)
{
    $conn = connect();
    $sql = "UPDATE sanpham SET TinhTrang = '$status' WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}


function getAllProductByQuery($query)
{
    $conn = connect();
    $sql = "SELECT * FROM sanpham WHERE 1 AND TenSanPham LIKE '%$query%' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
