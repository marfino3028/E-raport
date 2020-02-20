<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas'): ?>
<style type=”text/css”>

    .f {
    
    float: right;
    
    }
    
    .clr {
    
    clear: both;
    
    }
    
    </style>
<?php
$ar_judul = ['No','NIS','Nama','Kelas','Kategori','Foto','Action'];
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
                    <li><a href="">Dashboard</a></li>
                    <li><a href="#">Siswa</a></li>
                    <li class="active">Siswa Smp</li>
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
                        <a href="<?php echo e(url('generate-smp')); ?>" role="button" class="btn btn-success btn-sm" ><i class="fa fa-print"></i>&nbsp; Cetak Data SMP</a><br><br>
                <div class="card">
                    <div class="card-header">
                    <strong class="card-title">Data Siswa<a href="<?php echo e(route('siswa_smp.create')); ?>" role="button" class="btn btn-info btn-sm" style="float:right;" ><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                <?php $__currentLoopData = $ar_smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" width="5%"><?php echo e($no++); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($smp->nis); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($smp->nama); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($smp->kelas); ?></td>
                                    <td class="text-center" width="13,5%"><?php echo e($smp->jenis); ?></td>
                                    <td class="text-center" width="13,5%">
                                        <?php if(!empty($smp->foto)): ?>
                                        <img src="<?php echo e(asset('imgsiswa')); ?>/<?php echo e($smp->foto); ?>" width="15%" alt="">
                                             <?php else: ?>
                                             <img class="img-fluid" src="<?php echo e(asset('imguser/no-profile.png')); ?>" alt=""> 
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center" width="20%">
                                        <form action="<?php echo e(route('siswa_smp.destroy',$smp->id)); ?>" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="<?php echo e(route('siswa_smp.show',$smp->id)); ?>" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                            <a class="btn btn-warning btn-circle" role="button" href="<?php echo e(route('siswa_smp.edit',$smp->id)); ?>" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
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


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/smp/index.blade.php ENDPATH**/ ?>