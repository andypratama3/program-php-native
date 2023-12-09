<?php
require_once('../require/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $date_start = strip_tags(mysqli_escape_string($connect, $_POST['date_start']));
    $date_end = strip_tags(mysqli_escape_string($connect, $_POST['date_end']));
    $title = strip_tags(mysqli_escape_string($connect, $_POST['title']));
    $tools = strip_tags(mysqli_escape_string($connect, $_POST['tools']));
    $description = strip_tags(mysqli_escape_string($connect, $_POST['description']));

    $query = "INSERT INTO experience(date_start, date_end, title,tools,description) VALUES('{$date_start}', '{$date_end}', '{$title}','{$tools}','{$description}')";
    $result = mysqli_query($connect, $query);

    if($result){
        $successMessage = "Experience Berhasil Di tambahkan";
        header("Location: ../admin/experience/index.php?successMessage=" . urlencode($successMessage));
        exit();
        
    }
}