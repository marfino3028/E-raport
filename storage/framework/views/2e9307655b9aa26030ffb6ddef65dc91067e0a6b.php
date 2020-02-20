<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ar_walas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $walas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3 mx-auto" style="max-width: 600px;">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card-body">
				<h5 class="card-title text-center">DETAIL WALI KELAS</h5>
				<table align="center" width="50%" border="0" cellspacing="2" cellpadding="0">
					<tr>
						<td>Mata Pelajaran</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($walas->nip); ?></td>
                    </tr>
                    <tr>
						<td>Nama</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($walas->nama); ?></td>
					</tr>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($walas->jenis); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="<?php echo e(url('/walas')); ?>" class="btn btn-primary btn-lg">Kembali</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/walas/show.blade.php ENDPATH**/ ?>