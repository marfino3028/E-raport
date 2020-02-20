@extends('layouts.index')
@section('content')
@if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas')
@foreach ($ar_kepsek as $kepsek)
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="aktive">Data Kepala Sekolah</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        @include('notif')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card" style="">
            <div class="card-header">
                <strong class="card-title">Data Kepala Sekolah</strong>
            </div>
            <div class="card-body">
                    <div class=" card card-body  mb-2">
                    <form action="{{route('kepsek.update',$kepsek->id)}}"
                        enctype="multipart/form-data" method="POST" >
                            @csrf
                            @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label mb-1">Nama Kepala Sekolah</label>
                                            <input name="kepsek" value="{{ $kepsek->nama_kepsek }}" type="text" class="form-control">
                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="control-label mb-1">NIP</label>
                                        <div class="input-group">
                                            <input name="nip" value="{{ $kepsek->nip }}" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div> <br>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Simpan&nbsp;
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                        </form>
                    </div>

            </div>
        </div> <!-- .card -->

    </div>
</div>
</div>
</div>
@endforeach
@else
@include('layouts.terlarang')
@endif
@endsection