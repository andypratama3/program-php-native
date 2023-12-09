<?php
require_once('../require/database.php');

if (isset($_GET['id'])) {
    $experience_id = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "DELETE FROM bukutamu WHERE id = {$experience_id}";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $successMessage = "Buku Tamu berhasil dihapus";
        header("Location: ../admin/bukutamu/index.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        $errorMessage = "Gagal menghapus BukuTamu";
        header("Location: ../admin/bukutamu/index.php?errorMessage=" . urlencode($errorMessage));
        exit();
    }
} else {
    $errorMessage = "Buku Tamu ID not provided.";
    header("Location: ../admin/bukutamu/index.php?errorMessage=" . urlencode($errorMessage));
    exit();
}
?>
