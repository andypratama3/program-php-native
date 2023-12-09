<?php

session_start();
$successMessage = isset($_GET['successMessage']) ? $_GET['successMessage'] : '';
require_once('../require/database.php');
require_once('../require/auth.php');
onlyAdmin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- box-icons  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="assets/icons/icon.css"> -->
    <!-- scroll reveal  -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Portfolio</title>
</head>

<body>
    <?php if ($successMessage): ?>
    <?php echo $successMessage; ?>
    <h2><?php echo $successMessage; ?></h2>
    <?php endif; ?>
    <!-- Header  -->
    <?php require_once('../layouts/admin/admin_layout.php'); ?>
    <!-- Section Home -->
    <section class="home" id="home">
        <div class="home-content">
            <h3><span id="multiple-text" class="multiple-text heading"></span></h3>
        </div>
    </section>
    <?php require_once('../layouts/footer.php'); ?>
</body>

<script src="assets/js/script.js"></script>
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
            strings: ['Halo Selamat Datang Admin!'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
        });
    }
</script>

</html>