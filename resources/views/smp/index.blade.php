@extends('layouts.index')
@section('content')
@if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas')
<style type=”text/css”>

    .f {
    
    float: right;
    
    }
    
    .clr {
    
    clear: both;
    
    }
    
    </style>
@php
$ar_judul = ['No','NIS','Nama','Kelas','Kategori','Foto','Action'];
$no = 1;
@endphp
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
                    <li><a href="">Dashboard</a></li>
                    <li><a href="#">Siswa</a></li>
                    <li class="active">Siswa Smp</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
    @include('notif')
        <div class="row">

            <div class="col-md-12">
                        <a href="{{ url('generate-smp') }}" role="button" class="btn btn-success btn-sm" ><i class="fa fa-print"></i>&nbsp; Cetak Data SMP</a><br><br>
                <div class="card">
                    <div class="card-header">
                    <strong class="card-title">Data Siswa<a href="{{ route('siswa_smp.create') }}" role="button" class="btn btn-info btn-sm" style="float:right;" ><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    @foreach($ar_judul as $jdl)
                                    <th class="text-center">{{ $jdl }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ar_smp as $smp)
                                <tr>
                                    <td class="text-center" width="5%">{{ $no++ }}</td>
                                    <td class="text-center" width="13,5%">{{ $smp->nis }}</td>
                                    <td class="text-center" width="13,5%">{{ $smp->nama }}</td>
                                    <td class="text-center" width="13,5%">{{ $smp->kelas }}</td>
                                    <td class="text-center" width="13,5%">{{ $smp->jenis }}</td>
                                    <td class="text-center" width="13,5%">
                                        @if(!empty($smp->foto))
                                        <img src="{{ asset('imgsiswa') }}/{{ $smp->foto }}" width="15%" alt="">
                                             @else
                                             <img class="img-fluid" src="{{asset('imguser/no-profile.png')}}" alt=""> 
                                        @endif
                                    </td>
                                    <td class="text-center" width="20%">
                                        <form action="{{ route('siswa_smp.destroy',$smp->id) }}" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="{{ route('siswa_smp.show',$smp->id)}}" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                            <a class="btn btn-warning btn-circle" role="button" href="{{ route('siswa_smp.edit',$smp->id)}}" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Dihapus nihh?')"><i class= "fa fa-trash"></i>&nbsp;Hapus</button>
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>
  @else
  @include('layouts.terlarang')
  @endif
@endsection

