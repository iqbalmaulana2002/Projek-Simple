<div class="container">

	<?php if(session('pesan')): ?>
		<div class="alert alert-success">
			<?php echo e(session('pesan')); ?>

		</div>
	<?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow">

        
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Profile Saya</h5>
        </div>

        
        <div class="card-body">

                <div class="row">                
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped" cellspacing="0">
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td><strong><?php echo e(auth()->user()->nik); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><strong><?php echo e(auth()->user()->username); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>nama</td>
                                    <td>:</td>
                                    <td><strong><?php echo e(auth()->user()->nama); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>No. Telepon</td>
                                    <td>:</td>
                                    <td><strong><?php echo e(auth()->user()->telp); ?></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

        </div>
	</div>
	<div class="text-center mt-4 mb-5 pb-5">
		<a href="<?php echo e(url('/masyarakat')); ?>" class="btn btn-primary">Kembali</a>
		<a href="<?php echo e(url('/masyarakat/edit')); ?>" class="btn btn-warning">Edit Profile</a>
	</div>

</div><?php /**PATH C:\xampp\htdocs\Ario\pengaduan_fix\resources\views/masyarakat/profil.blade.php ENDPATH**/ ?>