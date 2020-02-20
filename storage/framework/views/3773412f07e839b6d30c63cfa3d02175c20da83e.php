<?php $__env->startSection('content'); ?>
	<?php $__currentLoopData = $ar_smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="card mb-3 mx-auto" style="max-width: 700px;">
		<div class="row no-gutters">
		  <div class="col-md-4">
			<?php if(!empty($smp->foto)): ?>
			<img src="<?php echo e(asset('imgsiswa')); ?>/<?php echo e($smp->foto); ?>" alt="">
				 <?php else: ?>
			<i class="fa fa-user"></i>
			<?php endif; ?>
		  </div>
		  <div class="col-md-8">
			<div class="card-body"> <br>
			  <h5 class="card-title text-center">DETAIL SISWA SMP</h5> <br>
			  <table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
				  <tr>
					  <td>Nama</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;<?php echo e($smp->nama); ?></td>
				  </tr>
				  <tr>
					  <td>NIS</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;<?php echo e($smp->nis); ?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td>&nbsp; &nbsp;<?php echo e($smp->kelas); ?></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>:</td>
					<td>&nbsp; &nbsp;<?php echo e($smp->jenis); ?></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td>&nbsp; &nbsp;<?php echo e($smp->tempat_lahir); ?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td>&nbsp; &nbsp;<?php echo e($smp->tanggal_lahir); ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>&nbsp; &nbsp;<?php echo e($smp->alamat); ?></td>
				</tr>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<a rel="nofollow" href="<?php echo e(url('/siswa_smp')); ?>" class="btn btn-primary btn-lg">Kembali</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/smp/show.blade.php ENDPATH**/ ?>