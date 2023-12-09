<?php
session_start();
require_once('require/database.php');
require_once('require/auth.php');
$successMessage = isset($_GET['successMessage']) ? $_GET['successMessage'] : '';

$query = "SELECT * FROM experience ORDER BY id DESC";
$result = mysqli_query($connect, $query);

?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

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
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="">Home</a> 
            <a href="#experience">Experience</a>
            <a href="#bukutamu">Buku Tamu</a>
            <?php if(checkLogin()) : ?>
                <a href="admin/index.php" class="nav-link">Admin</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
            <?php endif; ?>
        </nav>
    </header>
    
    <!-- Section Home -->
    <section class="home" id="home">
        <div class="home-content">
            <h3><span id="multiple-text" class="multiple-text heading"></span></h3>
        </div>
        <div class="home-img">
            <!-- <img src="assets/img/img.png" alt=""> -->
        </div>
    </section>
    <!-- <section class="about" id="about">
        <div class="about-img">
            <img src="assets/img/img.png" alt="" srcset="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>FullStack Developer</h3>
            <p>Saya Adalah Porgrammer yang berfokus pada fullstack Developer</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section> -->

    <!-- services -->
    <section class="services" id="services">
        <h2 class="heading">Out <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code-alt"></i>
                <h3>Front End</h3>
                <p>Html Dan css dengan menggunakan Bootstrap</p>
                <a href="https://andypratama3.github.io/portfolio_new/" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class="bx bx-data"></i>
                <h3>Back End</h3>
                <p>Php, Javascript Dengan FrameWork Laravel</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class="bx bx-layer"></i>
                <h3>FullStack</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero suscipit qui vel consequuntur autem
                    commodi, facere impedit necessitatibus soluta hic possimus veritatis similique ut ipsam assumenda,
                    voluptatem inventore reiciendis quo.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="experience">
        <h2 class="heading">Project Or  <span>Experience</span></h2>
        <div class="portfolio-container">
        <?php 
            $no = 1;
            while ($data = mysqli_fetch_array($result)) : ?>
            <div class="portfolio-box">
                <img src="assets/img/portfolio1.png" alt="">
                <div class="portfolio-layer">
                    <h4><?= $data['date_start']; ?></h4>
                    <h4><?= $data['date_end']; ?></h4>
                    <p><?= $data['tools']; ?></p>
                    <p><?= $data['description']; ?></p>
                    <!-- <a href="https://koetaimahkota.com"><i class="bx bx-link-external"></i></a> -->
                </div>
            </div>
            <?php $no++; endwhile; ?>
        </div>
    </section>
    <!-- Contact  -->
    <section class="contact" id="bukutamu">
        <h2 class="heading">Buku <span>Tamu</span></h2>
        <form action="action/add_buku_tamu.php" method="POST">
            <div class="input-box">
                <input type="text" name="name" id="name" placeholder="Nama">
                <input type="text" id="email" name="email" placeholder="Email">
            </div>
            <textarea name="pesan" id="desc" cols="30" rows="10" placeholder="Pesan"></textarea>
            <button type="sub" class="btn">Kirim</button>
        </form>
    </section>
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by AndyPratama | All Rights Reserved.</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>
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
            strings: ['Halo Selamat Datang'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
        });
    }
</script>

</html>