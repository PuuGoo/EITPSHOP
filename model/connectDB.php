<?php

function connect()
{
    $servername = "sql6.freesqldatabase.com";
    $username = "sql6685256";
    $password = "1303Puu!";

    try {
        // Với mysql là tên của DBMS, localhost có ý nghĩa database được đặt trên cùng server, izlearn là tên của database. $username và $password là 2 biến chứa thông tin xác thực.
        $conn = new PDO("mysql:host=$servername;dbname=sql6685256", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
