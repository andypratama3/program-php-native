
<header class="header">
    <a href="#" class="logo">Portfolio</a>
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <a href="#home" class="active">Home</a> 
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Buku Tamu</a>
        <?php if(checkLogin()) : ?>
                <a href="../../action/logout.php" class="nav-link">LogOut</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
            <?php endif; ?>
    </nav>
</header>