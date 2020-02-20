@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_mapel = App\Mapel::all();
$ar_guru = App\Guru::all();
$ar_kategori = App\Kategori::all();
@endphp
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card" style="">
					<div class="card-header">
						<strong class="card-title">Setting Mata Pelajaran</strong>
					</div>
					<div class="card-body">
						<div class=" card card-body  mb-2">
							<form method="POST" action="{{route('mapel.store')}}">
								@csrf 
								<div class="form-group row">
									<label for="nama" class="col-4 col-form-label">Mata Pelajaran</label> 
									<div class="col-8">
										<input id="nama" name="nama" type="text" class="form-control" required="required" value="" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Guru</label> 
									<div class="col-8">
										<select name="guru" class="custom-select">
											<option value="">-- Pilih Guru --</option>
											@foreach ($ar_guru as $guru) 
											<option value="{{ $guru['id'] }}"> {{ $guru['nama'] }} </option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Kategori</label> 
									<div class="col-8">
										<select name="kategori" class="custom-select">
											<option value="">-- Pilih kategori --</option>
											@foreach ($ar_kategori as $kat) 
											<option value="{{ $kat['id'] }}"> {{ $kat['nama'] }} </option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="offset-4 col-8">  
										<button name="proses" type="submit" class="btn btn-primary" 
										value="simpan">Simpan</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection