<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_siswa = App\Siswa::all();
$ar_tahun = App\Tahun::all();
$ar_mapel = App\Mapel::all();
$ar_walas = App\Walas::all();
?>
<div class="content mt-3">
	<div class="animated fadeIn">
	  <div class="row">
		<div class="col-md-8 mx-auto">
		 <div class="card" style="">
		  <div class="card-header">
			<strong class="card-title">Set Nilai SMP</strong>
		  </div>
		  <div class="card-body">
			<div class=" card card-body  mb-2">
<form method="POST" action="<?php echo e(route('penilaian.store')); ?>"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group row">
		<label class="col-4 col-form-label">Siswa</label> 
		<div class="col-8">
			<select name="siswa" class="custom-select">
				<option value="">-- Pilih Siswa --</option>
				<?php $__currentLoopData = $ar_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<option value="<?php echo e($siswa['id']); ?>"> <?php echo e($siswa['nama']); ?> </option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Semester</label> 
		<div class="col-8">
			<select name="tahun" class="custom-select">
				<option value="">-- Pilih Semester --</option>
				<?php $__currentLoopData = $ar_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<option value="<?php echo e($tahun['id']); ?>"> <?php echo e($tahun['semester']); ?> </option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
    <div class="form-group row">
		<label class="col-4 col-form-label">Tahun Akademik</label> 
		<div class="col-8">
			<select name="tahun" class="custom-select">
				<option value="">-- Pilih Tahun --</option>
				<?php $__currentLoopData = $ar_tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<option value="<?php echo e($tahun['id']); ?>"> <?php echo e($tahun['tahun']); ?> </option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Mata Pelajaran</label> 
		<div class="col-8">
			<select name="mapel" class="custom-select">
				<option value="">-- Pilih Mapel --</option>
				<?php $__currentLoopData = $ar_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<option value="<?php echo e($mapel['id']); ?>"> <?php echo e($mapel['nama']); ?> </option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="nilai" class="col-4 col-form-label">Nilai</label> 
		<div class="col-8">
			<input id="nilai" name="nilai" type="number" class="form-control" required="required" value="" />
		</div>
	</div> 
	<div class="form-group row">
		<label for="kkm" class="col-4 col-form-label">KKM</label> 
		<div class="col-8">
			<input id="kkm" name="kkm" type="number" class="form-control" required="required" value="" />
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Wali Kelas</label> 
		<div class="col-8">
			<select name="walas" class="custom-select">
				<option value="">-- Pilih Walas --</option>
				<?php $__currentLoopData = $ar_walas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $walas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<option value="<?php echo e($walas['id']); ?>"> <?php echo e($walas['nama']); ?> </option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="rangking" class="col-4 col-form-label">Rangking</label> 
		<div class="col-8">
			<input id="rangking" name="rangking" type="number" class="form-control" required="required" value="" />
		</div>
	</div>
	<div>
		<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
			Simpan&nbsp;
		  <span id="payment-button-sending" style="display:none;">Sending…</span>
		</button>
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/penilaian/form.blade.php ENDPATH**/ ?>