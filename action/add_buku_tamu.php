<?php
require_once('../require/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = strip_tags(mysqli_escape_string($connect, $_POST['name']));
    $email = strip_tags(mysqli_escape_string($connect, $_POST['email']));
    $pesan = strip_tags(mysqli_escape_string($connect, $_POST['pesan']));

    $query = "INSERT INTO bukutamu(name, email, pesan) VALUES('{$name}', '{$email}', '{$pesan}')";
    $result = mysqli_query($connect, $query);

    if($result){
        $successMessage = "Buku Tamu Berhasil Di tambahkan";
        header("Location: ../index.php?successMessage=" . urlencode($successMessage));
        exit();
        
    }
}