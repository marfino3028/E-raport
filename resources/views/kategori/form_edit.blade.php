@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_kategori = App\Kategori::all();
@endphp
@foreach ($data as $edit)
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
<form method="POST" action="{{route('kategori.update',$edit->id)}}"
      enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Kategori</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control"
             value="{{ $edit->nama }}" />
    </div>
  </div>
    <div>  
        <button id="payment-button" type="Ubah" class="btn btn-lg btn-warning btn-block">
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
@endforeach
@endsection

