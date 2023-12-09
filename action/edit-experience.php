<?php
require_once('../require/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $experience_id = strip_tags(mysqli_escape_string($connect, $_POST['experience_id']));
    $date_start = strip_tags(mysqli_escape_string($connect, $_POST['date_start']));
    $date_end = strip_tags(mysqli_escape_string($connect, $_POST['date_end']));
    $title = strip_tags(mysqli_escape_string($connect, $_POST['title']));
    $tools = strip_tags(mysqli_escape_string($connect, $_POST['tools']));
    $description = strip_tags(mysqli_escape_string($connect, $_POST['description']));

    // Assuming experience_id is an integer, adjust the query accordingly if it's a different data type.
    $query = "UPDATE experience SET
              date_start = '{$date_start}',
              date_end = '{$date_end}',
              title = '{$title}',
              tools = '{$tools}',
              description = '{$description}'
              WHERE id = {$experience_id}";

    $result = mysqli_query($connect, $query);

    if ($result) {
        $successMessage = "Experience Berhasil Diubah";
        header("Location: ../admin/experience/index.php?successMessage=" . urlencode($successMessage));
        exit();
    }
}
?>
