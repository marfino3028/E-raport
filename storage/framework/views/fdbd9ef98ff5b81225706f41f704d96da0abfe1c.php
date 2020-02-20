    
    <?php $__env->startSection('content'); ?>

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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-sm-6 col-lg-3">
            <a href="<?php echo e(url('/siswa_smp')); ?>">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-users border-white"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-white">Jumlah Siswa SMP</div>
                            <div class="stat-digit text-white"><?php echo e($smp); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-sm-6 col-lg-3">
            <a href="<?php echo e(url('/siswa_smk')); ?>">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-users  border-white"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-white">Jumlah Siswa SMK</div>
                                <div class="stat-digit text-white"><?php echo e($smk); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-sm-6 col-lg-3">
        <a href="<?php echo e(url('/guru')); ?>">
            <div class="card text-white bg-flat-color-5">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="fa fa-users border-white"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text text-white">Jumlah Guru</div>
                        <div class="stat-digit text-white"><?php echo e($guru); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="fa fa-users border-white"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text text-white">User Terdaftar</div>
                        <div class="stat-digit text-white"><?php echo e($user); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>