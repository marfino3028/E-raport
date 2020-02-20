<html>

<head>
    <link rel="stylesheet" href="layouts/vendors/bootstrap/dist/css/bootstrap.min.css">
    <style>
        td {
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
        }
        
        img {
            position: absolute;
            top: -20px;
        }
        
        p {
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
    <?php $__currentLoopData = $ar_smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <img src="main/img/ponpes2.png" width="15%" alt="">

    <p>LAPORAN HASIL BELAJAR
        <br> SMP TAHFIDZ ENTREPRENEUR THURSINA YBM PLN
        <br> CIBEUREUM CISARUA BOGOR
        <br> TAHUN PELARAN <?php echo e($smp->tahun); ?> </p>
    <hr>
    <table border="0" align="left" width="50%">
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
    </table>
    <br>
    <br>
    <br>

    <table cellspacing="4" border="1" width="100%">
        <tr>
            <?php $no = 1; ?>
            <td rowspan="2" class="text-center">NO</td>
            <td rowspan="2" class="text-center">Mata Pelajaran</td>
            <td rowspan="2" class="text-center">KKM</td>
            <td colspan="2" class="text-center">Nilai</td>
        </tr>
        <tr>
            <td class="text-center">Angka</td>
            <td class="text-center">Huruf</td>
        </tr>
        <?php $__currentLoopData = $ar_smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($no++); ?></td>
            <td class="text-center"><?php echo e($smp->mapel); ?></td>
            <td class="text-center"><?php echo e($smp->kkm); ?></td>
            <?php if( $smp->nilai <= $smp->kkm): ?>
                <td class="text-center"><font style="color:red;"><?php echo e($smp->nilai); ?></font></td>
                <?php else: ?>
                <td class="text-center"><?php echo e($smp->nilai); ?></td>
                <?php endif; ?> <?php if( $smp->nilai >= 90): ?>
                <td class="text-center">A</td>
                <?php elseif($smp->nilai >= 75): ?>
                <td class="text-center">B</td>
                <?php elseif($smp->nilai >= 60): ?>
                <td class="text-center">C</td>
                <?php elseif($smp->nilai >= 55): ?>
                <td class="text-center">D</td>
                <?php else: ?>
                <td class="text-center">E</td>
                <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center" colspan="3">Jumlah Nilai</td>
            <td class="text-center"></td>

            <td></td>
        </tr>
        <tr>
            <td class="text-center" colspan="3">Rata-rata Nilai</td>
            <td class="text-center"></td>
            <td></td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" width="50%">Mengetahui,</td>
            <td align="center" width="50%">Wali Kelas </td>
        </tr>
        <tr>
            <td align="center">Orang Tua</td>
            <td align="center"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="text-center">(...............................)</td>
            <td class="text-center"><?php echo e($smp->walas); ?></td>
        </tr>
    </table>
    <br>
    <table border="0" cellspacing="0" width="100%">
        <tr>
            <td align="center">Kepala Sekolah</td>
        </tr>
        <tr>
            <td align="center">SMP TAHFIDZ ENTREPRENEUR THURSINA YBM PLN</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class="text-center"><?php echo e($smp->kepsek); ?></td>
        </tr>
    </table>
</body>

</html><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/penilaiansmp/raport.blade.php ENDPATH**/ ?>