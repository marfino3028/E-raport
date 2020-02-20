<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas'): ?>
<?php
$ar_judul = ['No','Nama','Email','Role','Foto','Action'];
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
                    <li class="active">Kelola Users</li>
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
                        <strong class="card-title">Kelola Users<button type="button" class="btn btn-info btn-sm my-2 my-sm-0" style="float: right;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button></strong>
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
                                <?php $__currentLoopData = $ar_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center" width="5%"><?php echo e($no++); ?></td>
                                    <td class="text-center" width="20%"><?php echo e($user->name); ?></td>
                                    <td class="text-center" width="25%"><?php echo e($user->email); ?></td>
                                    <td class="text-center" width="10%"><?php echo e($user->role); ?></td>
                                    <td class="text-center" width="20%">
                                        <?php if(!empty($user->foto)): ?>
                                        <img class="img-fluid" src="<?php echo e(asset('imguser')); ?>/<?php echo e($user->foto); ?>" width="15%"></td>
                                        <?php else: ?>
                                        <img class="img-fluid" src="<?php echo e(asset('imguser/no-profile.png')); ?>" width="15%" alt=""> 
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center" width="20%">
                                        <form action="<?php echo e(route('user.destroy',$user->id)); ?>" method="POST">
                                        <a class="btn btn-info btn-circle" role="button" href="<?php echo e(route('user.show',$user->id)); ?>" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                        <a class="btn btn-warning btn-circle" role="button" href="<?php echo e(route('user.edit',$user->id)); ?>" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <?php echo $__env->make('user.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php else: ?>
  <?php echo $__env->make('layouts.terlarang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/user/index.blade.php ENDPATH**/ ?>