<!-- Illustrations -->
 <?php $__env->startSection('content'); ?> 
<?php 
$ar_role = ['a'=>'Administrator', 'b'=>'Walas' ,'c'=>'Siswa']; 
?> <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="POST" action="<?php echo e(route('user.update',$edit->id)); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                  <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Kelola Users</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Kelola Users</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 col-7">
                    <div class="card-body">
                        <div class="text-left">
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Nama Anda</label>
                                    <input id="name" name="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($edit->name); ?>"> <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Email Anda</label>
                                    <input id="email" name="email" type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($edit->email); ?>" /> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Role User</label>
                                    <select name="role" class="custom-select">
                                        <option value="">Pilih Kategori User</option>
                                        <?php $__currentLoopData = $ar_role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php 
                                        $rol = ($edit->role == $roles) ? 'selected' : ''; 
                                        ?>
                                        <option value="<?php echo e($roles); ?>" <?php echo e($rol); ?>><?php echo e($roles); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Password</label>
                                    <input id="password" name="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="" /> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                  <a href="<?php echo e(url('/user')); ?>" class="btn btn-secondary"><i class="far fa-hand-point-left">&nbsp;Go Back</i></a>
                                    <button name="proses" type="submit" class="btn btn-warning" value="ubah">Ubah</button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 col-4">
                  <div class="card-body">
                  <div class="form-group row">
                    <div class="col-8">
                      <?php if(!empty($edit->foto)): ?>
                      <img class="img-thumbnail" src="<?php echo e(asset('imguser')); ?>/<?php echo e($edit->foto); ?>">
                      <?php else: ?>
                      <img class="img-thumbnail" src="<?php echo e(asset('imguser/no-profile.png')); ?>" alt=""> 
                      <?php endif; ?>
                      <input value="<?php echo e($edit->foto); ?>" name="foto" type="file" class="form-control-file">
                    </div>
                  </div>
                  </div>
                </div>
                </div>
            </div>
    </div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/user/form_edit.blade.php ENDPATH**/ ?>