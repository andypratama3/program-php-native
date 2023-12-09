<?php

require_once('../../require/database.php');
require_once('../../require/auth.php');
onlyAdmin();
if (isset($_GET['id'])) {
    $experience_id = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "SELECT * FROM experience WHERE id = {$experience_id}";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $experience = mysqli_fetch_assoc($result);

        $date_start = $experience['date_start'];
        $date_end = $experience['date_end'];
        $title = $experience['title'];
        $tools = $experience['tools'];
        $description = $experience['description'];
    } else {
        echo "Data Id Tidak Di Temukan.";
        exit();
    }
} else {
    
    echo "Id Tidak Ada";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- box-icons  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="assets/icons/icon.css"> -->
    <!-- scroll reveal  -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Edit Experience</title>
</head>
<body>
    <!-- Header  -->
    <?php @include('../../layouts/admin/admin_layout.php')?>
    <section class="contact" id="contact" >
    <br>
    <br>
    <br>
        <h2>Edit Experience</h2>
        <form action="../../action/edit-experience.php" method="POST">
        <input type="hidden" name="experience_id" value="<?php echo $experience_id; ?>">
            <div class="input-box">
                <div class="form-group">
                <label for="">Waktu Mulai</label>
                <input type="text" name="date_start" id="date_start" value="<?php echo $date_start; ?>">
                </div>
                <div class="form-group">
                <label for="">Waktu Selesai</label>
                <input type="text" id="date_end" value="<?php echo $date_end; ?>" name="date_end" placeholder="Email">
                </div>
            </div>
            <div class="input-box">
                <input type="text" value="<?php echo $title; ?>" name="title" id="title" placeholder="title">
                <input type="text" id="tools" value="<?php echo $tools; ?>" name="tools" placeholder="tools">
            </div>
            <div class="input-box">
                <textarea name="description" id="" cols="30" rows="10"placeholder="Deskripsi" ><?php echo $description; ?></textarea>
            </div>
            <button type="sub" class="btn">Submit</button>
        </form>
    </section>

    <?php require_once('../../layouts/footer.php'); ?>
</body>

<script src="../../assets/js/script.js"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
    const successMessage = "<?php echo $successMessage; ?>";

    let typed;

    if (successMessage) {
        typed = new Typed('.multiple-text', {
            strings: [successMessage],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 100,
        });
    } else {
        typed = new Typed('.multiple-text', {
            strings: ['Halaman Buku Tamu'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
        });
    }
</script>

</html>