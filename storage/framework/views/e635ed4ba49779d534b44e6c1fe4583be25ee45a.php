 <?php $__env->startSection('content'); ?>
<div class="breadcrumbs ">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Show Profile</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Show Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show Profile</h6>
    </div>
    <div class="card-body">
        <div class="text-left">
            <?php if(!empty(Auth::user()->foto)): ?>
            <img class="img-fluid" src="<?php echo e(asset('imguser/'.Auth::user()->foto)); ?>"></td>
            <?php else: ?>
            <img class="img-fluid" src="<?php echo e(asset('imguser/no-profile.png')); ?>" alt=""> 
            <?php endif; ?>
            <table width="60%" cellpadding="10" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo e(Auth::user()->name); ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo e(Auth::user()->email); ?></td>
                    </tr>
                    <tr>
                        <td>Jenis User</td>
                        <td><?php echo e(Auth::user()->role); ?></td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td> <a href="<?php echo e(url('/profile')); ?>"><i class="far fa-hand-point-left"> Go Back</i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/profile/show.blade.php ENDPATH**/ ?>