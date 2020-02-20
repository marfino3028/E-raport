<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Register - Eraport</title>
    <link rel="shortcut icon" href="<?php echo e(asset('layouts/img/icon.png')); ?>" >

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('lgn/assets/css/bootstrap.css')); ?>"> 
    <link rel="stylesheet" href="<?php echo e(asset('lgn/assets/css/style.css')); ?>">
</head>
<body>
    <div id="app">
    <main class="py-6">
        <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <img src="<?php echo e(asset('lgn/img/logo2.png')); ?>" width="95%">
                    <form method="POST" class="login-form" action="<?php echo e(route('register')); ?>">
                      <?php echo csrf_field(); ?>
        
                                <div class="form-group">
                                    <label><?php echo e(__('Name')); ?></label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
        
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
        
                                <div class="form-group">
                                    <label><?php echo e(__('E-Mail Address')); ?></label>
                                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
        
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
        
                                <div class="form-group">
                                    <label><?php echo e(__('Password')); ?></label>
                                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
        
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
        
                                <div class="form-group">
                                    <label><?php echo e(__('Confirm Password')); ?></label>
                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
        
                                
                                <div class="form-group">
                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                                            <?php echo e(__('Register')); ?>

                                        </button>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-8 banner-sec">
                      </div>
                </div>
            </div>
        </section>
    </main>
        </div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="<?php echo e(asset('lgn/assets/js/jquery.js')); ?>"></script> 
<script src="<?php echo e(asset('lgn/assets/js/popper.js')); ?>"></script> 
<script src="<?php echo e(asset('lgn/assets/js/bootstrap.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/auth/register.blade.php ENDPATH**/ ?>