<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','NIS','Nama','Kelas','Action'];
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
                    <li class="active">smk Smk</li>
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
                    <strong class="card-title">Setting Nilai<a href="<?php echo e(route('penilaiansmk.create')); ?>" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                <?php $__currentLoopData = $ar_penilaian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penilaian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" width="5%"><?php echo e($no++); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($penilaian->nis); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($penilaian->nama); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($penilaian->kelas); ?></td>
                                    <td class="text-center" width="13,5%">
                                        <form action="<?php echo e(route('penilaiansmk.destroy',$penilaian->id)); ?>" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="<?php echo e(url('raport-smk',$penilaian->siswa_id)); ?>" ><i class= "fa fa-print"></i>&nbsp;Cetak Raport</a>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/penilaiansmk/index.blade.php ENDPATH**/ ?>