<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ar_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3 mx-auto" style="max-width: 600px;">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card-body">
				<h5 class="card-title text-center">DETAIL TAHUN AJARAN</h5> <br>
				<table align="center" width="50%" border="0" cellspacing="2" cellpadding="0">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($thn->tahun); ?></td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($thn->semester); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="<?php echo e(url('/tahun_akademik')); ?>" class="btn btn-primary btn-lg">Kembali</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/tahun/show.blade.php ENDPATH**/ ?>