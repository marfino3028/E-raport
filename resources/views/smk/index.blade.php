@extends('layouts.index')
@section('content')
@if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas')
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
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Siswa</a></li>
                    <li class="active">Siswa Smk</li>
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
                        <a href="{{ url('generate-smk') }}" role="button" class="btn btn-success btn-sm" ><i class="fa fa-print"></i>&nbsp; Cetak Data SMK</a> <br> <br>
                <div class="card">
                    <div class="card-header">
                    <strong class="card-title">Data smk<a href="{{ route('siswa_smk.create') }}" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                @foreach($ar_smk as $smk)
                                <tr>
                                    <td class="text-center" width="5%">{{ $no++ }}</td>
                                    <td class="text-center" width="13,5%">{{ $smk->nis }}</td>
                                    <td class="text-center" width="13,5%">{{ $smk->nama }}</td>
                                    <td class="text-center" width="13,5%">{{ $smk->kelas }}</td>
                                    <td class="text-center" width="13,5%">{{ $smk->jenis }}</td>
                                    <td class="text-center" width="13,5%">
                                        @if(!empty($smk->foto))
                                        <img src="{{ asset('imgsiswa') }}/{{ $smk->foto }}" width="20%" alt="">
                                             @else
                                        <i class="fa fa-user"></i>
                                        @endif
                                    </td>
                                    <td class="text-center" width="20%">
                                        <form action="{{ route('siswa_smk.destroy',$smk->id) }}" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="{{ route('siswa_smk.show',$smk->id)}}" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                            <a class="btn btn-warning btn-circle" role="button" href="{{ route('siswa_smk.edit',$smk->id)}}" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
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

