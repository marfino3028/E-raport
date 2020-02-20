<?php
    $ar_role = ['a'=>'Walas','b'=>'Siswa']; 
?>
<div class="content mt-3">
	<div class="animated fadeIn">
						<form method="POST" action="<?php echo e(route('user.store')); ?>">
							<?php echo csrf_field(); ?>
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Nama</label></div>
								<div class="col-12 col-md-9">
									<input type="text"  name="nama" placeholder="Masukan Nama" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nama')); ?>">
									<?php $__errorArgs = ['nama'];
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
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Email Input</label></div>
								<div class="col-12 col-md-9">
									<input type="email"  name="email" placeholder="Masukan Email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>">
									<?php $__errorArgs = ['email'];
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
                            <div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Password</label></div>
								<div class="col-12 col-md-9">
									<input type="password"  name="password" placeholder="Masukan password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password')); ?>">
									<?php $__errorArgs = ['password'];
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
                                <label class="col col-md-3">Role</label> 
                                    <div class="col-12 col-md-9">
                                        <select name="role" class="custom-select">
                                            <option value="">-- Pilih Role User --</option>
                                                <?php $__currentLoopData = $ar_role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                <option value="<?php echo e($role); ?>"><?php echo e($role); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                            </div>
						<div>
							<button type="submit" class="btn btn-primary btn-block">
								<i class="fa fa-dot-circle-o"></i> Submit
							</button>
						</div>
					</form>
	</div>
</div><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/user/form.blade.php ENDPATH**/ ?>