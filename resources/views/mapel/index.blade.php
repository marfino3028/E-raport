@extends('layouts.index')
@section('content')
@if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas')
@php
$ar_judul = ['No','Mata Pelajaran', 'Guru', 'Kategori','Action'];
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
                    <li><a href="#">Master Data</a></li>
                    <li class="active">Mata Pelajaran</li>
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
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Mata Pelajaran <a href="{{ route('mapel.create') }}" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                @foreach($ar_mapel as $mapel)
                                <tr>
                                    <td class="text-center" width="10%">{{ $no++ }}</td>
                                    <td class="text-center" width="23,3%">{{ $mapel->nama }}</td>
                                    <td class="text-center" width="23,3%">{{ $mapel->pengajar }}</td>
                                    <td class="text-center" width="23,3%">{{ $mapel->jenis }}</td>
                                    <td class="text-center" width="20%">
                                        <form action="{{ route('mapel.destroy',$mapel->id) }}" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="{{route('mapel.show',$mapel->id)}}" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                            <a class="btn btn-warning btn-circle" role="button" href="{{route('mapel.edit',$mapel->id)}}" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Dihapus nihh?')"><i class= "fa fa-trash">&nbsp;Hapus</i></button>
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

