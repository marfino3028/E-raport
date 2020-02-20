<?php $__env->startSection('content'); ?>
	<?php $__currentLoopData = $ar_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="card mb-3 mx-auto" style="max-width: 700px;">
		<div class="row no-gutters">
		  <div class="col-md-4">
			<?php if(!empty($user->foto)): ?>
			<img src="<?php echo e(asset('imguser')); ?>/<?php echo e($user->foto); ?>" alt="">
				 <?php else: ?>
                 <img src="<?php echo e(asset('imguser')); ?>/no-profile.png" alt="">
			<?php endif; ?>
		  </div>
		  <div class="col-md-8">
			<div class="card-body"> <br>
                <h5 class="card-title text-center">DETAIL USER</h5> <br>
			  <table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
				  <tr>
					  <td>Nama</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;<?php echo e($user->name); ?></td>
				  </tr>
				  <tr>
					  <td>Email</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;<?php echo e($user->email); ?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td>&nbsp; &nbsp;<?php echo e($user->role); ?></td>
				</tr>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<a rel="nofollow" href="<?php echo e(url('/user')); ?>" class="btn btn-primary btn-lg">Kembali</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/user/show.blade.php ENDPATH**/ ?>