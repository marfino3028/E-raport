<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_mapel = App\Mapel::all();
$ar_guru = App\Guru::all();
$ar_kategori = App\Kategori::all();
?>
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card" style="">
					<div class="card-header">
						<strong class="card-title">Setting Mata Pelajaran</strong>
					</div>
					<div class="card-body">
						<div class=" card card-body  mb-2">
							<form method="POST" action="<?php echo e(route('mapel.store')); ?>">
								<?php echo csrf_field(); ?> 
								<div class="form-group row">
									<label for="nama" class="col-4 col-form-label">Mata Pelajaran</label> 
									<div class="col-8">
										<input id="nama" name="nama" type="text" class="form-control" required="required" value="" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Guru</label> 
									<div class="col-8">
										<select name="guru" class="custom-select">
											<option value="">-- Pilih Guru --</option>
											<?php $__currentLoopData = $ar_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
											<option value="<?php echo e($guru['id']); ?>"> <?php echo e($guru['nama']); ?> </option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Kategori</label> 
									<div class="col-8">
										<select name="kategori" class="custom-select">
											<option value="">-- Pilih kategori --</option>
											<?php $__currentLoopData = $ar_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
											<option value="<?php echo e($kat['id']); ?>"> <?php echo e($kat['nama']); ?> </option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="offset-4 col-8">  
										<button name="proses" type="submit" class="btn btn-primary" 
										value="simpan">Simpan</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/mapel/form.blade.php ENDPATH**/ ?>