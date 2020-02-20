@extends('layouts.index')
@section('content')
@phps
//ambil master data
$ar_guru = App\Guru::all();
@endphp
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="card">
					<div class="card-header">
						<strong>Form</strong> Guru
					</div>
					<div class="card-body card-block">
						<form method="POST" action="{{route('guru.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">NIP</label></div>
								<div class="col-12 col-md-9">
									<input type="text" name="nip" placeholder="Masukan NIP" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}">
									@error('nip')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>  
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
								<div class="col col-md-3"><label  class=" form-control-label">Tempat Lahir</label></div>
								<div class="col-12 col-md-9">
									<input type="text"  name="tempat" placeholder="Tempat Lahir" class="form-control @error('tempat') is-invalid @enderror" value="{{ old('tempat') }}">
									@error('tempat')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">Tanggal Lahir</label></div>
								<div class="col-12 col-md-9">
									<input type="date"  name="tanggal" placeholder="Tanggal Lahir" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
									@error('tanggal')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
								<div class="col-12 col-md-9">
									<textarea name="alamat" id="textarea-input" rows="9" placeholder="Alamat.." class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
									@error('alamat')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label  class=" form-control-label">No HP</label></div>
								<div class="col-12 col-md-9">
									<input type="text"  name="hp" placeholder="Masukan no hp" class="form-control @error('hp') is-invalid @enderror" value="{{ old('hp') }}">
									@error('hp')
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
								<div class="col col-md-3"><label  class=" form-control-label">Foto</label></div>
								<div class="col-12 col-md-9">
								<input type="file" id="file" name="foto" class="form-control-file @error('foto') is-invalid @enderror" value="{{ old('foto')}}">
									@error('foto')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror 
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary btn-block">
								<i class="fa fa-dot-circle-o"></i> Submit
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection