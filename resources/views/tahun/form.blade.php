@extends('layouts.index')
@section('content')
@php
//ambil master data
$ar_tahun = App\Tahun::all();
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
            <form method="POST" action="{{route('tahun_akademik.store')}}">
             @csrf 
             <div class="form-group has-success">
              <label class="control-label mb-1">Tahun Ajaran</label>
              <input name="tahun" type="text" class="form-control" >
            </div>
            <div class="form-group has-success">
              <label class="control-label mb-1">Semester</label>
              <input name="semester" type="text" class="form-control" >
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