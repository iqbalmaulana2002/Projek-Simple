<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form | Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('login-regis/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo e(asset('login-regis/css/style.css')); ?>">
</head>
<body>
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo e(asset('login-regis/images/signin-image.jpg')); ?>" alt="sing up image"></figure>
                        <a href="<?php echo e(asset('/register')); ?>" class="signup-image-link">Belum Punya Akun? Buat Akun</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Masukkan Username Akun Anda" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Masukkan Kata Sandi Anda" autocomplete="off"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo e(asset('login-regis/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('login-regis/js/main.js')); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php /**PATH E:\pengaduan_fix\resources\views/login.blade.php ENDPATH**/ ?>