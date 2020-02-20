<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_guru = App\Guru::all();
?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-8 mx-auto">
       <div class="card" style="">
        <div class="card-header">
          <strong class="card-title">Setting Aplikasi</strong>
        </div>
        <div class="card-body">
          <div class=" card card-body  mb-2">
            <form method="POST" action="<?php echo e(route('guru.update',$edit->id)); ?>"
              enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">NIP</label> 
                <div class="col-8">
                  <input id="nip" name="nip" type="text" class="form-control"
                  value="<?php echo e($edit->nip); ?>" />
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Guru</label> 
                <div class="col-8">
                  <input id="nama" name="nama" type="text" class="form-control"
                  value="<?php echo e($edit->nama); ?>" />
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
                <label for="hp" class="col-4 col-form-label">No Hp</label> 
                <div class="col-8">
                  <input id="hp" name="hp" type="text" class="form-control" required="required" value="<?php echo e($edit->hp); ?>" />
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                  <input id="nama" name="email" type="text" class="form-control" required="required" value="<?php echo e($edit->email); ?>" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4">Foto</label> 
                <div class="col-8">
                  <input name="foto" type="file" class="form-control-file" value="<?php echo e($edit->file); ?>">
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

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/guru/form_edit.blade.php ENDPATH**/ ?>