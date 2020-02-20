<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Login - Eraport</title>
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
              <form method="POST" class="login-form" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
    
                <div class="form-group">
                  <label >E-mail Address</label>
    
                  <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
    
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
              <label>Password</label>
              <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
    
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
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
    
                <label class="form-check-label" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>
            </div>
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                <?php echo e(__('Login')); ?>

            </button>
            <?php if(Route::has('password.request')): ?>
            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                Lupa Password?
            </a>
            <?php endif; ?>
        </div>
    </form>
    </div>
    <div class="col-md-8 banner-sec">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo e(asset('lgn/img/1.png')); ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('lgn/img/2.png')); ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('lgn/img/3.png')); ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
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
</html>
<?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/auth/login.blade.php ENDPATH**/ ?>