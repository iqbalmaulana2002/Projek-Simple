
<?php $__env->startSection('title','Dashboard Admin'); ?>
<?php $__env->startSection('content'); ?>

<ul class="nav mb-2">
    <li class="nav-item mr-1">
        <a href="<?php echo e(url('/admin/export_pdf')); ?>" class="btn btn-danger" onclick="return confirm('Download PDF?');">Export PDF</a>
    </li>
</ul>

<div class="container">


    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Data Pengaduan</h3>
                    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                        <select class="form-select shadow-none row border-top">
                            <option>2021-04</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No</th>
                                <th class="border-top-0">Tanggal Pengaduan</th>
                                <th class="border-top-0">Nama Pengadu</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($msy->tgl_pengaduan); ?></td>
                                <td><?php echo e($msy->masyarakat->nama); ?></td>
                                <td><?php echo e($msy->status); ?></td>
                                <td>
                                    <a href="<?php echo e(url('/admin/detail_pengaduan/'.$msy->id_pengaduan)); ?>" class="btn btn-primary font-weight-bold">
                                    <i class="fas fa-search-plus"></i> <span class="d-none d-md-inline">Detail</span></a>
                                    <?php if($msy->status != 'selesai'): ?>
                                        <a href="<?php echo e(url('/admin/tanggapan/'.$msy->id_pengaduan)); ?>" class="btn btn-success font-weight-bold">
                                        <i class="fas fa-check"></i> <span class="d-none d-md-inline">Tanggapi</span></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../tamplate_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pengaduan_fix\resources\views/admin/dashboard_admin.blade.php ENDPATH**/ ?>