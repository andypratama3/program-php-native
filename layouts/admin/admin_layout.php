
<header class="header">
    <a href="#" class="logo">Portfolio</a>
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <a href="../../index.php">Home</a> 
        <a href="../admin/bukutamu/index.php">Buku Tamu</a>
        <a href="../../admin/experience/index.php">Experience</a>
        <a href="../../admin/user/index.php">User</a>
        <?php if(checkLogin()) : ?>
                <a href="../../action/logout.php" class="nav-link">LogOut</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
            <?php endif; ?>
    </nav>
</header>