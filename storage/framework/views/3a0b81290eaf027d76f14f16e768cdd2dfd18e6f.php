<!DOCTYPE html>
<html>
<head>
	<title>Data Pengaduan</title>
	<style>
		table {
			margin: auto;
		}
	</style>
</head>
<body>

<center><h1>Data Pengaduan Masyarakat</h1></center>
<table border="1" cellspacing="0" cellpadding="4">
	<thead>
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tanggal Pengaduan</th>
			<th>Judul</th>
			<th>Isi Pengaduan</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr align="center">
				<td><?php echo e($loop->iteration); ?></td>
				<td><?php echo e($p->masyarakat->nik); ?></td>
				<td><?php echo e($p->masyarakat->nama); ?></td>
				<td><?php echo e($p->tgl_pengaduan); ?></td>
				<td><?php echo e($p->judul); ?></td>
				<td align="justify"><?php echo e($p->isi_laporan); ?></td>
				<td><?php echo e($p->status); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>

</body>
</html><?php /**PATH E:\pengaduan_fix\resources\views/admin/export_pdf.blade.php ENDPATH**/ ?>