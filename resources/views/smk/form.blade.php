@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_kategori = App\Kategori::all();
@endphp
<div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-8 mx-auto">
           <div class="card" style="">
              <div class="card-header">
                <strong class="card-title">Setting Aplikasi</strong>
            </div>
            <div class="card-body">
                <div class=" card card-body  mb-2">
                    <form method="POST" action="{{route('siswa_smk.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nip" class="col-4 col-form-label">NIS</label> 
                            <div class="col-8">
								<input id="nis" name="nis" type="text" class="form-control  @error('nis') is-invalid @enderror" value="{{ old('nis') }}" />
								@error('nis')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label> 
                            <div class="col-8">
								<input id="nama" name="nama" type="text" class="form-control" @error('nama') is-invalid @enderror" value="{{ old('nama') }}"/>
								@error('nama')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelas" class="col-4 col-form-label">Kelas</label> 
                            <div class="col-8">
								<input id="kelas" name="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" />
								@error('kelas')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Kategori</label> 
                            <div class="col-8">
                                <select name="kategori" class="custom-select @error('kategori') is-invalid @enderror">
                                    <option value="">-- Pilih kategori --</option>
                                    @foreach ($ar_kategori as $kat) 
                                    <option value="{{ $kat['id'] }}"> {{ $kat['nama'] }} </option>
                                    @endforeach
								</select>
								@error('kategori')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Tempat Lahir</label> 
                            <div class="col-8">
								<input id="nama" name="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" value="{{ old('tempat') }}" />
								@error('tempat')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Tanggal Lahir</label> 
                            <div class="col-8">
								<input id="nama" name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" />
								@error('tanggal')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                            <div class="col-8">
								<textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
								@error('alamat')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label class="col-4">Foto</label> 
                            <div class="col-8">
								<input value="" name="foto" type="file" class="form-control-file @error('foto') is-invalid @enderror" value="{{ old('foto')}}">
								@error('foto')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror 
                            </div>
                        </div>
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