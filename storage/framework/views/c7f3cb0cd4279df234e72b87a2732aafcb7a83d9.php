        <header id="header" class="header">
        	<div class="header-menu">
        		<div class="col-sm-7">
        			<a id="menuToggle" class="menutoggle pull-left">☰</a>
        			<div class="header-left">
        				<button class="search-trigger"><i class="fa fa-search"></i></button>
        				<div class="form-inline">
        					<form class="search-form">
        						<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
        						<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
        					</form>
        				</div>
        		</div>
        	</div>

        	<div class="col-sm-5">
        		<div class="user-area dropdown float-right">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php if(!empty(Auth::user()->foto)): ?>
						<img class="user-avatar rounded-circle" src="<?php echo e(asset('imguser/'.Auth::user()->foto)); ?>" alt="User Avatar">
						<?php else: ?>
						<img class="user-avatar rounded-circle" src="<?php echo e(asset('imguser')); ?>/no-profile.png" alt="User Avatar">
						<?php endif; ?>
					</a>
        			<div class="user-menu dropdown-menu">
						<span class="d-lg-inline" style="font-size: 15px;">Halo ,<?php echo e(Auth::user()->name); ?></span>
						<a class="nav-link" href="<?php echo e(url('/profile')); ?>"><i class="fa fa-user"></i> My Profile</a>
						<?php if(Auth::user()->role == 'administrator'): ?>
						<a class="nav-link" href="<?php echo e(url('/user')); ?>"><i class="fa fa-users"></i> Kelola Users</a>
						<?php endif; ?>
						<a class="nav-link" href="<?php echo e(route('logout')); ?>"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i>
						  <?php echo e(__('Logout')); ?>

					  </a>
			
					  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
						<?php echo csrf_field(); ?>
					  </form>
        			</div>
        		</div>

        	</div>
        </div>

    </header><?php /**PATH C:\xampp\htdocs\E-rapor\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>