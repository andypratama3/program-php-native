<?php
require_once('../require/database.php');

if (isset($_GET['id'])) {
    $experience_id = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "DELETE FROM experience WHERE id = {$experience_id}";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $successMessage = "Experience berhasil dihapus";
        header("Location: ../admin/experience/index.php?successMessage=" . urlencode($successMessage));
        exit();
    } else {
        $errorMessage = "Gagal menghapus experience";
        header("Location: ../admin/experience/index.php?errorMessage=" . urlencode($errorMessage));
        exit();
    }
} else {
    $errorMessage = "Experience ID not provided.";
    header("Location: ../admin/experience/index.php?errorMessage=" . urlencode($errorMessage));
    exit();
}
?>
