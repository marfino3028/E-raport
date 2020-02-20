<html>
<head>
    <link rel="stylesheet" href="layouts/vendors/bootstrap/dist/css/bootstrap.min.css">
    <style>
        td {
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <table border="0" align="left" width="50%">
        <?php $__currentLoopData = $ar_smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>Nama Sekolah</td>
            <td>:</td>
            <td>SMP TAHFIDZ ENTREPRENEUR THURSINA YBM PLN</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>Cibeureum, Cisarua, Bogor, Jawa Barat 16750</td>
        </tr>
        <tr>
            <td>Nama / NIS</td>
            <td>:</td>
            <td><?php echo e($smp->nama); ?> / <?php echo e($smp->nis); ?></td>
        </tr>
    </table>
    <table border="0" align="right" width="40%">
        <tr>
            <td width="30%">Kelas</td>
            <td>:</td>
            <td><?php echo e($smp->kelas); ?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td width="10%">:</td>
            <td><?php echo e($smp->semester); ?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?php echo e($smp->tahun); ?></td>
        </tr>
    </table> <br> <br> <br>

    <table cellspacing="4" border="1" width="100%">
        <tr>
            <?php
            $no = 1;
            ?>
      <td rowspan="2" class="text-center">NO</td>
      <td rowspan="2" class="text-center">Mata Pelajaran</td>
      <td rowspan="2" class="text-center">KKM</td>
      <td colspan="2" class="text-center">Nilai</td>
    </tr>
    <tr>
      <td class="text-center">Angka</td>
      <td class="text-center">Huruf</td>
    </tr>
    <tr>
        <td class="text-center"><?php echo e($no++); ?></td>
        <td class="text-center"><?php echo e($smp->mapel); ?></td>
        <td class="text-center"><?php echo e($smp->kkm); ?></td>
        <td class="text-center"><?php echo e($smp->nilai); ?></td>
        <td class="text-center">B</td>
    </tr>
  </table>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/penilaian/raport.blade.php ENDPATH**/ ?>