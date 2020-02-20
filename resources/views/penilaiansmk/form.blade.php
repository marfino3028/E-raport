@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_siswa = App\Siswa::all();
$ar_tahun = App\Tahun::all();
$ar_mapel = App\Mapel::all();
$ar_walas = App\Walas::all();
$ar_kategori = App\Kategori::all();
$ar_kepsek = App\Kepsek::all();
@endphp
<div class="content mt-3">
	<div class="animated fadeIn">
	  <div class="row">
		<div class="col-md-8 mx-auto">
		 <div class="card" style="">
		  <div class="card-header">
			<strong class="card-title">Set Nilai SMP</strong>
		  </div>
		  <div class="card-body">
			<div class=" card card-body  mb-2">
<form method="POST" action="{{route('penilaiansmk.store')}}"  enctype="multipart/form-data">
	@csrf
	<div class="form-group row">
		<label class="col-4 col-form-label">Kategori</label> 
		<div class="col-8">
			<select name="kategori" class="custom-select">
				<option value="">-- Pilih Kategori --</option>
				@foreach ($ar_kategori as $kat) 
				<option value="{{ $kat['id'] }}"> {{ $kat['nama'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
    <div class="form-group row">
		<label class="col-4 col-form-label">Siswa</label> 
		<div class="col-8">
			<select name="siswa" class="custom-select">
				<option value="">-- Pilih Siswa --</option>
				@foreach ($ar_siswa as $siswa) 
				<option value="{{ $siswa['id'] }}"> {{ $siswa['nama'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Semester</label> 
		<div class="col-8">
			<select name="tahun" class="custom-select">
				<option value="">-- Pilih Semester --</option>
				@foreach ($ar_tahun as $tahun) 
				<option value="{{ $tahun['id'] }}"> {{ $tahun['semester'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
    <div class="form-group row">
		<label class="col-4 col-form-label">Tahun Akademik</label> 
		<div class="col-8">
			<select name="tahun" class="custom-select">
				<option value="">-- Pilih Tahun --</option>
				@foreach ($ar_tahun as $tahun) 
				<option value="{{ $tahun['id'] }}"> {{ $tahun['tahun'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Mata Pelajaran</label> 
		<div class="col-8">
			<select name="mapel" class="custom-select">
				<option value="">-- Pilih Mapel --</option>
				@foreach ($ar_mapel as $mapel) 
				<option value="{{ $mapel['id'] }}"> {{ $mapel['nama'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="nilai" class="col-4 col-form-label">Nilai</label> 
		<div class="col-8">
			<input id="nilai" name="nilai" type="number" class="form-control" required="required" value="" />
		</div>
	</div> 
	<div class="form-group row">
		<label for="kkm" class="col-4 col-form-label">KKM</label> 
		<div class="col-8">
			<input id="kkm" name="kkm" type="number" class="form-control" required="required" value="" />
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Wali Kelas</label> 
		<div class="col-8">
			<select name="walas" class="custom-select">
				<option value="">-- Pilih Walas --</option>
				@foreach ($ar_walas as $walas) 
				<option value="{{ $walas['id'] }}"> {{ $walas['nama'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-4 col-form-label">Kepala Sekolah</label> 
		<div class="col-8">
			<select name="kepsek" class="custom-select">
				<option value="">-- Pilih Kepsek --</option>
				@foreach ($ar_kepsek as $kepsek) 
				<option value="{{ $kepsek['id'] }}"> {{ $kepsek['nip'] }} - {{ $kepsek['nama_kepsek'] }} </option>
				@endforeach
			</select>
		</div>
	</div>
	<!--div class="form-group row">
		<label for="rangking" class="col-4 col-form-label">Rangking</label> 
		<div class="col-8">
			<input id="rangking" name="rangking" type="number" class="form-control" required="required" value="" />
		</div>
	</div-->
	<div>
		<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
			Simpan&nbsp;
		  <span id="payment-button-sending" style="display:none;">Sending…</span>
		</button>
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