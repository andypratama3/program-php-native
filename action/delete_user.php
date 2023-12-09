<?php
require_once('../require/database.php');

if (isset($_GET['id'])) {
    $user_id = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "DELETE FROM user WHERE id = {$user_id}";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $successMessage = "User berhasil dihapus";
        header("Location: ../admin/user/index.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        $errorMessage = "Gagal menghapus User";
        header("Location: ../admin/user/index.php?errorMessage=" . urlencode($errorMessage));
        exit();
    }
} else {
    $errorMessage = "User ID not provided.";
    header("Location: ../admin/user/index.php?errorMessage=" . urlencode($errorMessage));
    exit();
}
?>
