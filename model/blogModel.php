<?php
include_once "model/connectDB.php";

function getAllBlogs()
{
    $conn = connect();
    $sql = "SELECT * FROM blog ORDER BY id desc";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getBlogById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM blog WHERE id = $id";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function createBlog($BlogTitle, $BlogContent, $BlogImage)
{

    $conn = connect();
    $sql = "INSERT INTO blog(BlogTitle, BlogContent, BlogImage) ";
    $sql .= "VALUES ('$BlogTitle', '$BlogContent', '$BlogImage' ) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteBlog($id)
{

    $conn = connect();
    $sql = "DELETE FROM blog WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateBlog($id, $BlogTitle, $BlogContent, $BlogImage)
{

    $conn = connect();
    $sql = "UPDATE blog SET ";
    $sql .= "BlogTitle = '$BlogTitle', ";
    $sql .= "BlogContent = '$BlogContent', ";
    $sql .= "BlogImage = '$BlogImage' ";
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
