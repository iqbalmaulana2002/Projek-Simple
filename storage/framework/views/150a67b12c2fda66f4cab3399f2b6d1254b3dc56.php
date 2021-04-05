
<?php $__env->startSection('title','Data Petugas'); ?>
<?php $__env->startSection('content'); ?>
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="<?php echo e(url('/admin/data_petugas')); ?>" method="POST" class="register-form" id="register-form">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-reader"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="username" id="username" placeholder="Masukkan Username Akun" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Anda" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label for="telp"><i class="zmdi zmdi-account-calendar"></i></label>
                                <input type="number" name="telp" id="telp" placeholder="Masukkan Nomor Telephone Anda" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label for="level"></label>
                                    <select name="level" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                        <div class="invalid-feedback"></div>
                                    </select>
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('../tamplate_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pengaduan_fix\resources\views/admin/register_petugas.blade.php ENDPATH**/ ?>