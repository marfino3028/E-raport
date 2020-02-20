 <?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas'): ?>
        <div class="breadcrumbs ">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <br>
                <br>
                <br>
                <br>
                <section class="banner-area">
                    <div class="container">
                        <div class="row fullscreen align-items-center justify-content-between">
                            <div class="col-lg-6 col-md-6 banner-left">
                                <h1><?php echo e(Auth::user()->name); ?><br><sup><?php echo e(Auth::user()->role); ?></sup></h1>
                                <p>
                                    Email : <?php echo e(Auth::user()->email); ?>

                                </p>
                                <a href="<?php echo e(route('profile.edit',Auth::user()->id)); ?>" class="btn btn-info" style="text-decoration: none;"><i class="fa fa-cog"></i>&nbsp;Edit Profile</a>
                            </div>
                            <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                                <?php if(!empty(Auth::user()->foto)): ?>
                                <img class="img-fluid" src="<?php echo e(asset('imguser/'.Auth::user()->foto)); ?>"></td>
                                <?php else: ?>
                                <img class="img-fluid" src="<?php echo e(asset('imguser/no-profile.png')); ?>" alt=""> 
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
  <?php else: ?>
  <?php echo $__env->make('layouts.terlarang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/profile/index.blade.php ENDPATH**/ ?>