<?php
session_start();
require_once('../../require/database.php');
$successMessage = isset($_GET['successMessage']) ? $_GET['successMessage'] : '';

require_once('../../require/auth.php');
onlyAdmin();

$query = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($connect, $query);

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
    <title>User</title>
    <style>
        table {
            margin-top: 1rem;
            border-collapse: separate;
            border-spacing: 0 15px;
            border-collapse: collapse; width: 100%; border: 2px solid white; text-align: center; 
        }

        th {
            
            color: white;
        }

        th,
        td {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
        }

        h2 {
            color: #4287f5;
        }
    </style>
</head>

<body>
    <?php if ($successMessage): ?>
    <?php echo $successMessage; ?>
    <h2><?php echo $successMessage; ?></h2>
    <?php endif; ?>
    <!-- Header  -->
    <?php @include('../../layouts/admin/admin_layout.php')?>
    <!-- Section Home -->
    <section class="home" id="home">
        <div class="home-content">
            <h3><span id="multiple-text" class="multiple-text heading"></span></h3>
        </div>
    </section>
    <!-- Contact  -->
    <section class="contact" id="contact">
        <h3 class="heading">Data User<span></span></h3>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><?= $no; ?></th>
                            <td><?= $data['username']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-primary" style="font-size: 10px; size: small;">Edit</a>
                                
                                <a href="../../action/delete_user.php?id=<?= $data['id']; ?>" class="btn btn-primary" style="font-size: 10px; size: small; margin-top: 1rem;">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++; endwhile; ?>
                </tbody>
            </table>

    </section>
    <?php require_once('../../layouts/footer.php'); ?>
</body>

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
            strings: ['Halaman User'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
        });
    }
</script>

</html>