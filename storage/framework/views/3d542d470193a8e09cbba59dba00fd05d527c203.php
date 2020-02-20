<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ar_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3 mx-auto" style="max-width: 700px;">
	<div class="row no-gutters">
		<div class="col-md-4">
			<?php if(!empty($guru->foto)): ?>
			<img src="<?php echo e(asset('imgguru')); ?>/<?php echo e($guru->foto); ?>" alt="">
			<?php else: ?>
			<i class="fa fa-user"></i>
			<?php endif; ?>
		</div>
		<div class="col-md-8">
			<div class="card-body"><br>
				<h5 class="card-title text-center">DETAIL GURU</h5>
				<table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->nama); ?></td>
					</tr>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->nip); ?></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->tempat_lahir); ?></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->tanggal_lahir); ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->alamat); ?></td>
					</tr>
					<tr>
						<td>No Hp</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->hp); ?></td>
					</tr>
					<tr>
						<td>Email Address</td>
						<td>:</td>
						<td>&nbsp; &nbsp;<?php echo e($guru->email); ?></td>
						
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="<?php echo e(url('/guru')); ?>" class="btn btn-primary btn-lg">Kembali</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/guru/show.blade.php ENDPATH**/ ?>