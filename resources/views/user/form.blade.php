@php
    $ar_role = ['a'=>'Walas','b'=>'Siswa']; 
@endphp
<div class="content mt-3">
	<div class="animated fadeIn">
						<form method="POST" action="{{route('user.store')}}">
							@csrf
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Nama</label></div>
								<div class="col-12 col-md-9">
									<input type="text"  name="nama" placeholder="Masukan Nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
									@error('nama')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
                            </div>
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Email Input</label></div>
								<div class="col-12 col-md-9">
									<input type="email"  name="email" placeholder="Masukan Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
									@error('email')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
                            </div>
                            <div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Password</label></div>
								<div class="col-12 col-md-9">
									<input type="password"  name="password" placeholder="Masukan password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
									@error('password')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
                            </div>
                            <div class="form-group row">
                                <label class="col col-md-3">Role</label> 
                                    <div class="col-12 col-md-9">
                                        <select name="role" class="custom-select">
                                            <option value="">-- Pilih Role User --</option>
                                                @foreach ($ar_role as $role) 
                                                <option value="{{ $role }}">{{ $role}}</option>
                                                @endforeach
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
</div>