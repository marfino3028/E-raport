<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_kategori = App\Kategori::all();
$ar_smk = App\Siswa::all();
?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-8 mx-auto">
         <div class="card" style="">
          <div class="card-header">
            <strong class="card-title">Edit data siswa smk</strong>
          </div>
          <div class="card-body">
            <div class=" card card-body  mb-2">
<form method="POST" action="<?php echo e(route('siswa_smk.update',$edit->id)); ?>"
      enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="form-group row">
    <label for="nis" class="col-4 col-form-label">NIS</label> 
    <div class="col-8">
        <input id="nis" name="nis" type="number" class="form-control" required="required" value="<?php echo e($edit->nis); ?>" />
    </div>
</div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control"
             value="<?php echo e($edit->nama); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="kelas" class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
        <input id="kelas" name="kelas" type="text" class="form-control" required="required" value="<?php echo e($edit->kelas); ?>" />
    </div>
</div> 
<div class="form-group row">
    <label class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
        <select name="kategori" class="custom-select">
            <option value="">-- Pilih kategori --</option>
            <?php $__currentLoopData = $ar_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $sel = ($edit->kategori_id == $kat['id']) ? 'selected' : '';    
            ?>  
            <option value="<?php echo e($kat['id']); ?>" <?php echo e($sel); ?>> <?php echo e($kat['nama']); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
        <input id="nama" name="tempat" type="text" class="form-control" required="required" value="<?php echo e($edit->tempat_lahir); ?>" />
    </div>
</div>
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
        <input id="nama" name="tanggal" type="date" class="form-control" required="required" value="<?php echo e($edit->tanggal_lahir); ?>" />
    </div>
</div>
<div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"><?php echo e($edit->alamat); ?></textarea>
    </div>
</div>   
<div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
        <input value="" name="foto" type="file" class="form-control-file">
    </div>
</div>
    <div>  
        <button id="payment-button" type="Ubah" class="btn btn-lg btn-warning btn-block">
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/smk/form_edit.blade.php ENDPATH**/ ?>