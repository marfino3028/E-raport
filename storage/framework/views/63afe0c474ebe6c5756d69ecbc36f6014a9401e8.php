<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas'): ?>
<?php
$ar_judul = ['No','NIP','Nama','Foto','Action'];
$no = 1;
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Guru</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <?php echo $__env->make('notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">

            <div class="col-md-12">
                <a href="<?php echo e(url('generate-guru')); ?>" role="button" class="btn btn-success btn-sm" ><i class="fa fa-print"></i>&nbsp; Cetak Data Guru</a><br><br>
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Guru<a href="<?php echo e(route('guru.create')); ?>" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th class="text-center"><?php echo e($jdl); ?></th>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ar_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" width="5%"><?php echo e($no++); ?></td>
                                    <td class="text-center" width="15%"><?php echo e($guru->nip); ?></td>
                                    <td class="text-center" width="15%"><?php echo e($guru->nama); ?></td>
                                    <td class="text-center" width="15%">
                                        <?php if(!empty($guru->foto)): ?>
                                        <img src="<?php echo e(asset('imgguru')); ?>/<?php echo e($guru->foto); ?>" width="15%" alt="">
                                        <?php else: ?>
                                        <i class="fa fa-user"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center" width="20%">
                                        <form action="<?php echo e(route('guru.destroy',$guru->id)); ?>" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="<?php echo e(route('guru.show',$guru->id)); ?>" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                            <a class="btn btn-warning btn-circle" role="button" href="<?php echo e(route('guru.edit',$guru->id)); ?>" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Dihapus nihh?')"><i class= "fa fa-trash"></i>&nbsp;Hapus</button>
                                        </td>
                                    </form>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>
  <?php else: ?>
  <?php echo $__env->make('layouts.terlarang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/guru/index.blade.php ENDPATH**/ ?>