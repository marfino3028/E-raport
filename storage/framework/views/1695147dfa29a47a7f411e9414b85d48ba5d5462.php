<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ar_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3 mx-auto" style="max-width: 600px;">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card-body">
				<h5 class="card-title text-center">DETAIL MATA PELAJARAN</h5>
				<table align="center" width="50%" border="0" cellspacing="2" cellpadding="0">
					<tr>
						<td>Mata Pelajaran</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($mapel->nama); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="<?php echo e(url('/mapel')); ?>" class="btn btn-primary btn-lg">Kembali</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/mapel/show.blade.php ENDPATH**/ ?>