<?php
require_once('../require/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = sha1($saltDb . $_POST['password']);

    $query = "INSERT INTO user(username, password) VALUES('{$username}', '{$password}')";
    $result = mysqli_query($connect, $query);
    mysqli_close($connect);

    if ($result) {
        header('location: ../admin/user/index.php?tambah=sukses');
    } else {
        header('location: ../admin/user/index.php?tambah=gagal');
    }
} else {
    header('location: ../admin/user/index.php');
}