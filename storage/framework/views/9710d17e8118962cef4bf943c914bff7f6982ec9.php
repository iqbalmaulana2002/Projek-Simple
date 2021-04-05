<div class="container">

    <!-- DataTales Example -->
    <div class="card shadow">

        
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h5>
        </div>

        
        <div class="card-body">

            <?php if(empty($pengaduan)): ?>
                <div class="text-center">
                    <p class="lead text-gray-600 mb-5"><strong>Data tidak di temukan</strong></p>
                </div>
            <?php else: ?>
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
                                    <td>Isi Laporan</td>
                                    <td>:</td>
                                    <td><strong><?php echo e($pengaduan->isi_laporan); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>
                                        <?php $badge = '';
                                            if($pengaduan->status == '0'){
                                                $badge = 'badge-danger';
                                            }elseif($pengaduan->status == 'proses'){
                                                $badge = 'badge-warning';
                                            }else{
                                                $badge = 'badge-success';
                                            }
                                        ?>
                                        <h5><strong class="badge <?php echo e($badge); ?>"><?php echo e($pengaduan->status); ?></strong></h5>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="text-center mt-3 mb-5 pb-5">
        <a href="<?php echo e(url('/masyarakat')); ?>" class="btn btn-primary btn-lg">Kembali</a>
    </div>
    
</div><?php /**PATH C:\xampp\htdocs\Ario\pengaduan_fix\resources\views/masyarakat/detail_pengaduan.blade.php ENDPATH**/ ?>