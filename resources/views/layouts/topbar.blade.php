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
						@if(!empty(Auth::user()->foto))
						<img class="user-avatar rounded-circle" src="{{ asset('imguser/'.Auth::user()->foto)}}" alt="User Avatar">
						@else
						<img class="user-avatar rounded-circle" src="{{ asset('imguser') }}/no-profile.png" alt="User Avatar">
						@endif
					</a>
        			<div class="user-menu dropdown-menu">
						<span class="d-lg-inline" style="font-size: 15px;">Halo ,{{ Auth::user()->name }}</span>
						<a class="nav-link" href="{{ url('/profile')}}"><i class="fa fa-user"></i> My Profile</a>
						@if (Auth::user()->role == 'administrator')
						<a class="nav-link" href="{{ url('/user')}}"><i class="fa fa-users"></i> Kelola Users</a>
						@endif
						<a class="nav-link" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i>
						  {{ __('Logout') }}
					  </a>
			
					  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					  </form>
        			</div>
        		</div>

        	</div>
        </div>

    </header>