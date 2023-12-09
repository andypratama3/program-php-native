
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

    <title>Login</title>
</head>

<body>
    <section class="contact" id="contact">
        <h2 class="heading">Login Page <span></span></h2>
        <form action="action/user_add.php" method="POST">
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </section>
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by AndyPratama | All Rights Reserved.</p>
        </div>
        
    </footer>
</body>

<script src="assets/js/script.js"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

</html>