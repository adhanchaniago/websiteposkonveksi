<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/auth/') ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="<?= base_url('assets/auth/') ?>img/wave_blue.png">
    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/auth/') ?>img/bg_social.svg">
        </div>
        <div class="login-content">
            <form action="<?= base_url('auth/changepassword') ?>" method="POST">
                <img src="<?= base_url('assets/auth/') ?>img/avatar_blue.svg">
                <h4 class="title">Reset Password</h4>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" id="password1" name="password1">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Repeat Password</h5>
                        <input type="password" class="input" id="password2" name="password2">
                    </div>
                </div>
                <input type="submit" class="btn" value="Change Password">
            </form>
        </div>

    </div>

    <script type="text/javascript" src="<?= base_url('assets/auth/') ?>js/main.js"></script>
</body>

</html>