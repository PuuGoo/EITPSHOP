<?php

include_once "model/connectDB.php";

function checkLogin($username, $password)
{

    $conn = connect();
    $sql = "SELECT * FROM nguoidung WHERE Email = '$username' AND MatKhau = '$password' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function checkEmailExists($email)
{
    $conn = connect();
    $sql = "SELECT Email FROM nguoidung WHERE Email = '$email' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllUsers()
{
    $conn = connect();
    $sql = "SELECT * FROM nguoidung ORDER BY id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUserById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM nguoidung WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function getUserByUserName($email)
{
    $conn = connect();
    $sql = "SELECT * FROM nguoidung WHERE Email = '$email' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}


function createUser($name, $email, $password, $mobile, $image, $role, $status)
{

    $conn = connect();
    $sql = "INSERT INTO nguoidung(HoTen, Email, MatKhau, VaiTro, HinhAnh, MobileNumber, NgayTao, Status) ";
    $sql .= "VALUES ('$name', '$email', '$password', '$role', '$image', '$mobile', now(), '$status' ) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function updateUser($id, $name, $email, $password, $mobile, $image, $role, $status)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "HoTen = '$name', ";
    $sql .= "Email = '$email', ";
    $sql .= "MatKhau = '$password', ";
    $sql .= "VaiTro = '$role', ";
    $sql .= "HinhAnh = '$image', ";
    $sql .= "MobileNumber = '$mobile', ";
    $sql .= "Status = '$status' ";
    $sql .= "WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function changePassword($id, $password)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "MatKhau = '$password' ";
    $sql .= "WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}


function changeToAdmin($id)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET VaiTro = '1' WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function changeToCustomer($id)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET VaiTro = '0' WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateUserAdmin($id, $username, $password, $name, $mobile_number, $image, $role)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "Email = '$username', ";
    $sql .= "MatKhau = '$password', ";
    $sql .= "HoTen = '$name', ";
    $sql .= "MobileNumber = '$mobile_number', ";
    $sql .= "HinhAnh = '$image', ";
    $sql .= "VaiTro = '$role' ";
    $sql .= "WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateUserProfileAdmin($id, $password, $name, $mobile_number, $image)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "MatKhau = '$password', ";
    $sql .= "HoTen = '$name', ";
    $sql .= "MobileNumber = '$mobile_number', ";
    $sql .= "HinhAnh = '$image' ";
    $sql .= "WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateUserByEmail($email, $token)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET Token = '{$token}' WHERE Email = '$email' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updatePasswordByToken($email, $token, $password)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET MatKhau = '$password' WHERE Email = '$email' AND Token = '$token' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteUser($id)
{
    $conn = connect();
    $sql = "DELETE FROM nguoidung WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countUsers()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM nguoidung ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}

function countUsersCustomer()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM nguoidung WHERE VaiTro = 0 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
