<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas'): ?>
<?php
$ar_judul = ['No','Mata Pelajaran', 'Guru', 'Kategori','Action'];
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
                    <li><a href="#">Master Data</a></li>
                    <li class="active">Mata Pelajaran</li>
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
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Mata Pelajaran <a href="<?php echo e(route('mapel.create')); ?>" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                <?php $__currentLoopData = $ar_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" width="10%"><?php echo e($no++); ?></td>
                                    <td class="text-center" width="23,3%"><?php echo e($mapel->nama); ?></td>
                                    <td class="text-center" width="23,3%"><?php echo e($mapel->pengajar); ?></td>
                                    <td class="text-center" width="23,3%"><?php echo e($mapel->jenis); ?></td>
                                    <td class="text-center" width="20%">
                                        <form action="<?php echo e(route('mapel.destroy',$mapel->id)); ?>" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="<?php echo e(route('mapel.show',$mapel->id)); ?>" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                            <a class="btn btn-warning btn-circle" role="button" href="<?php echo e(route('mapel.edit',$mapel->id)); ?>" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Dihapus nihh?')"><i class= "fa fa-trash">&nbsp;Hapus</i></button>
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


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/mapel/index.blade.php ENDPATH**/ ?>