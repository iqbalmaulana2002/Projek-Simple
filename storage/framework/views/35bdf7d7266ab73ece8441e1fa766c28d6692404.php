

<?php $__env->startSection('title', 'Detail Pengaduan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">

    <!-- DataTales Example -->
    <div class="card shadow">

        
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h5>
        </div>

        
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5 text-center">
                    <a href="<?php echo e(asset('img/'.$pengaduan->foto)); ?>" target="_blank">
                        <img src="<?php echo e(asset('img/'.$pengaduan->foto)); ?>" class="card-img-bottom rounded img-fluid shadow" style="width:400px; height:280px;"  alt="Klik untuk lebih jelas">
                    </a>
                </div>
            </div>

            <div class="row">                
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" cellspacing="0">
                            <tr>
                                <td>Tanggal Pengaduan</td>
                                <td>:</td>
                                <td><strong><?php echo e($pengaduan->tgl_pengaduan); ?></strong></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><strong><?php echo e($pengaduan->masyarakat->nik); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><strong><?php echo e($pengaduan->masyarakat->nama); ?></strong></td>
                            </tr>
                            <tr>
                                <td>No. Telepon</td>
                                <td>:</td>
                                <td><strong><?php echo e($pengaduan->masyarakat->telp); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Isi Laporan</td>
                                <td>:</td>
                                <td><strong><?php echo e($pengaduan->isi_laporan); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    <h5><strong><?php echo e($pengaduan->status); ?></strong></h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
	</div>
	<div class="text-center mt-3 mb-5 pb-5">
        
        <a class="btn btn-outline-success" href="<?php echo e(url('/petugas/dashboard_petugas')); ?>">Kembali</a>
        
        <a class="btn btn-success" href="<?php echo e(url('/petugas/tanggapan/'.$pengaduan->id_pengaduan)); ?>"><i class="fas fa-check"></i> Tanggapi</a>
	</div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../tamplate_petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Folder_iqbal\pengaduan_fix\resources\views/petugas/detail.blade.php ENDPATH**/ ?>