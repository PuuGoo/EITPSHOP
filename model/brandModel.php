<?php
include_once "model/connectDB.php";

function getAllBrands()
{
    $conn = connect();
    $sql = "SELECT * FROM brand ORDER BY id desc";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getBrandById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM brand WHERE id = $id";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function createBrand($BrandName, $BrandDescription, $BrandImage)
{

    $conn = connect();
    $sql = "INSERT INTO brand(BrandName, BrandDescription, BrandImage) ";
    $sql .= "VALUES ('$BrandName', '$BrandDescription', '$BrandImage') ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteBrand($id)
{

    $conn = connect();
    $sql = "DELETE FROM brand WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateBrand($id, $BrandName, $BrandDescription, $BrandImage)
{

    $conn = connect();
    $sql = "UPDATE brand SET ";
    $sql .= "BrandName = '$BrandName', ";
    $sql .= "BrandDescription = '$BrandDescription', ";
    $sql .= "BrandImage = '$BrandImage' ";
    $sql .= "WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countCatelogies()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM danhmuc ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
