<?php
include_once "model/connectDB.php";

function getAllSubCatelogies()
{
    $conn = connect();
    $sql = "SELECT * FROM subcategory ORDER BY id desc";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getSubCatelogyById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM subcategory WHERE id = '$id' ";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function createSubCatelogy($MaDanhMuc, $TenDanhMuc, $SubCategoryCode, $Description)
{

    $conn = connect();
    $sql = "INSERT INTO subcategory(MaDanhMuc, TenDanhMuc, SubCategoryCode, Description) ";
    $sql .= "VALUES ('$MaDanhMuc', '$TenDanhMuc', '$SubCategoryCode', '$Description') ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteSubCatelogy($id)
{

    $conn = connect();
    $sql = "DELETE FROM subcategory WHERE id = '$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateSubCatelogy($id,$MaDanhMuc, $TenDanhMuc, $SubCategoryCode, $Description)
{

    $conn = connect();
    $sql = "UPDATE subcategory SET ";
    $sql .= "MaDanhMuc = '$MaDanhMuc', ";
    $sql .= "TenDanhMuc = '$TenDanhMuc', ";
    $sql .= "SubCategoryCode = '$SubCategoryCode', ";
    $sql .= "Description = '$Description' ";
    $sql .= "WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countSubCatelogies()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM subcatelogy ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
