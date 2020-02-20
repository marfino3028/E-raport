<html>
<head>
    <link rel="stylesheet" href="layouts/vendors/bootstrap/dist/css/bootstrap.min.css">
    <style>
        td,th {
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
        }
        img{
        position: absolute;
        top: -20px;
        }
        p{
        font-family: Basic;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        line-height: 140.62%;
        /* or 35px */
        text-align: center;
        color: #000000;
        }
    </style>
</head>
<body>
  <img src="main/img/ponpes2.png" width="13%" alt="">
  <p>DATA GURU <br>
      SMP & SMK TAHFIDZ ENTREPRENEUR THURSINA YBM PLN <br>
      CIBEUREUM CISARUA BOGOR <br></p>
      <hr>
                <table border="1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                        $ar_judul = ['No','NIP','Nama','Tempat Lahir','Tanggal Lahir','Alamat','No HP','Alamat Email'];
                        $no = 1;
                    ?>
                    <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th class="text-center"><?php echo e($jdl); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $ar_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <tr>
                        <td class="text-center"><?php echo e($no++); ?></td>
                        <td class="text-center"><?php echo e($guru->nip); ?></td>
                        <td class="text-center"><?php echo e($guru->nama); ?></td>
                        <td class="text-center"><?php echo e($guru->tempat_lahir); ?></td>
                        <td class="text-center"><?php echo e($guru->tanggal_lahir); ?></td>
                        <td class="text-center"><?php echo e($guru->alamat); ?></td>
                        <td class="text-center"><?php echo e($guru->hp); ?></td>
                        <td class="text-center"><?php echo e($guru->email); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </tbody>

                </table>
</html><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/guru/DataGuru.blade.php ENDPATH**/ ?>