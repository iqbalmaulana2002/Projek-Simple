
<?php $__env->startSection('title','Tanggapan'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <br><br><h3 class="mb-4"><i class="fas fa-clipboard-list"></i>Berikan Tanggapan Petugas</h3>
            <form method="post" action="<?php echo e(url('/petugas/tanggapan/'.$pengaduan->id_pengaduan)); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <textarea class="form-control <?php $__errorArgs = ['tanggapan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggapan" placeholder="Masukkan tanggapan Anda"></textarea>
                    <?php $__errorArgs = ['tanggapan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                <label for="status"></label>
                    <select name="status" class="form-control <?php $__errorArgs = ['tanggapan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php if($pengaduan->status == '0'): ?>
                            <option value="proses">Proses</option>
                        <?php endif; ?>
                        <option value="selesai">Selesai</option>
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </select>
                </div>
                <div class="form-group row float-right">
                    <div class="col-md mt-4 mb-5">
                        <a href="<?php echo e(url('/petugas/detail_pengaduan/'.$pengaduan->id_pengaduan)); ?>" class="btn btn-outline-primary btn-light">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tanggapi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../tamplate_petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Folder_iqbal\pengaduan_fix\resources\views/petugas/tanggapan.blade.php ENDPATH**/ ?>