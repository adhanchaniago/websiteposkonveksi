<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/auth/') ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <script src="<?= base_url('assets/auth/') ?>js/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="font-family: 'Poppins', sans-serif;">
    <img class="wave" src="<?= base_url('assets/auth/') ?>img/wave_blue.png">
    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/auth/') ?>img/bg_social.svg">
        </div>
        <div class="login-content">
            <form action="<?= base_url('auth/login') ?>" method="POST">
                <img src="<?= base_url('assets/auth/') ?>img/avatar_blue.svg">
                <h2 class="title">Welcome</h2>
                <?= $this->session->flashdata('message'); ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></h5>
                        <input type="text" class="input" id="email" name="email" value="<?= set_value('email'); ?>">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></h5>
                        <input type="password" class="input" id="password" name="password">
                    </div>
                </div>
                <a href="<?= base_url('auth/lupapassword') ?>">Lupa Password?</a>
                <input type="submit" class="btn" value="Login">
                <a href="<?= base_url('auth/daftar') ?>" style="margin-top: 100; text-align: center;">Daftar</a>
            </form>
        </div>

    </div>

    <script type="text/javascript" src="<?= base_url('assets/auth/') ?>js/main.js"></script>
</body>

</html>