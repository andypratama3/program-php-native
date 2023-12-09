<?php
require_once('../require/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = sha1($saltDb . $_POST['password']);

    $query = "UPDATE user SET username = '{$username}' ";
    if($_POST['password']!= '') {
        $query .= ", password = '{$password}' ";
    }
    $query .= "WHERE id='{$id}'";
    $result = mysqli_query($connect, $query);
    mysqli_close($connect);

    if ($result) {
        header('location: ../admin/user/index.php?tambah=sukses');
    } else {
        header('location: ../admin/user/index.php?tambah=gagal');
    }
} else {
    header('location:manajemen-user.php');
}