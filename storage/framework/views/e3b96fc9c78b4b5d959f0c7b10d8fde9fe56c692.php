
   <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/dashboard')); ?>"><img src="<?php echo e(asset('layouts/img/logo.png')); ?>" alt="Logo"></a>
            <a class="navbar-brand hidden" href="<?php echo e(url('/dashboard')); ?>"><img src="<?php echo e(asset('layouts/img/icon1.png')); ?>"></a>
        </div>
        
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo e(url('/dashboard')); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Data</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <?php if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas' ): ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Master</a>
                    <ul class="sub-menu children dropdown-menu">
                        <?php if(Auth::user()->role == 'administrator'): ?>
                        <li><i class="fa fa-black-tie"></i><a href="<?php echo e(url('/kategori')); ?>">Kategori</a></li>
                        <?php endif; ?>
                        <li><i class="fa fa-book"></i><a href="<?php echo e(url('/mapel')); ?>">Mata pelajaran</a></li>
                        <li><i class="fa fa-calendar"></i><a href="<?php echo e(url('/tahun_akademik')); ?>">Tahun Akademik</a></li>
                    </ul>
                </li>
                <?php if(Auth::user()->role == 'administrator'): ?>
                <li>
                    <a href="<?php echo e(url('/kepsek')); ?>"><i class="menu-icon fa fa-sliders"></i>Data Kepala Sekolah</a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(url('/walas')); ?>"><i class="menu-icon fa fa-sliders"></i>Data Wali Kelas</a>
                </li>
                <?php if(Auth::user()->role == 'administrator'): ?>
                <li>
                    <a href="<?php echo e(url('/guru')); ?>"><i class="menu-icon fa fa-user-plus"></i>Data Guru</a>
                </li>
                <?php endif; ?>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Data Siswa</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user-plus"></i><a href="<?php echo e(url('/siswa')); ?>">Seluruh Siswa</a></li>
                        <li><i class="fa fa-user-plus"></i><a href="<?php echo e(url('/siswa_smp')); ?>">Siswa SMP</a></li>
                        <li><i class="fa fa-user-plus"></i><a href="<?php echo e(url('/siswa_smk')); ?>">Siswa SMK</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Input & Cetak</h3><!-- /.menu-title -->
                <?php endif; ?>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Set Nilai Siswa</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-user-plus"></i><a href="<?php echo e(url('/penilaiansmp')); ?>">Siswa SMP</a></li>
                        <li><i class="menu-icon fa fa-user-plus"></i><a href="<?php echo e(url('/penilaiansmk')); ?>">Siswa SMK</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>