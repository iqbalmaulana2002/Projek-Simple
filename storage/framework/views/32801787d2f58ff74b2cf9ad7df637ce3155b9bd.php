<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form | Pendaftaran</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('login-regis/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo e(asset('login-regis/css/style.css')); ?>">
</head>
<body>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="<?php echo e(url('/register')); ?>" method="POST" class="register-form" id="register-form">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="nik"><i class="zmdi zmdi-library"></i></label>
                                <input type="number" name="nik" id="nik" placeholder="Masukkan NIK Anda"/>
                            </div>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-reader"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="username" id="username" placeholder="Masukkan Username Akun"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Anda"/>
                            </div>
                            <div class="form-group">
                                <label for="telp"><i class="zmdi zmdi-account-calendar"></i></label>
                                <input type="number" name="telp" id="telp" placeholder="Masukkan Nomor Telephone Anda"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="register" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo e(asset('login-regis/images/signup-image.jpg')); ?>" alt="sing up image"></figure>
                        <a href="<?php echo e(asset('/login')); ?>" class="signup-image-link">Sudah Punya Akun? login</a>
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
<?php /**PATH C:\xampp\htdocs\Ario\pengaduan_fix\resources\views/register.blade.php ENDPATH**/ ?>