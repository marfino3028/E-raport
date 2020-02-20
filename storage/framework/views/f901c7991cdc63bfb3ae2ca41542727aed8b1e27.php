<?php $__env->startSection('content'); ?>
<?php
//ambil master data
$ar_kategori = App\Kategori::all();
?>
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
            <form method="POST" action="<?php echo e(route('kategori.store')); ?>">
             <?php echo csrf_field(); ?> 
             <div class="form-group has-success">
              <label class="control-label mb-1">Kategori</label>
              <input name="nama" type="text" class="form-control" >
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/kategori/form.blade.php ENDPATH**/ ?>