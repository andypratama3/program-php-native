<?php
session_start();
require_once('../../require/database.php');
require_once('../../require/auth.php');
onlyAdmin();
if (isset($_GET['id'])) {
    $user_id = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "SELECT * FROM user WHERE id = {$user_id}";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $experience = mysqli_fetch_assoc($result);
        $username = $experience['username'];
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
    <title>Edit User</title>
</head>
<body>
    <!-- Header  -->
    <?php @include('../../layouts/admin/admin_layout.php')?>
    <section class="contact" id="contact" >
    <br>
    <br>
    <br>
        <h2>Edit User</h2>
        <form action="../../action/edit_user.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user_id; ?>">
            <div class="input-box">
                <input type="text" name="username" id="username" value="<?php echo $username; ?>" placeholder>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
        
            <button type="sub" class="btn">Edit</button>
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