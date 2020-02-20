@extends('layouts.index')
@section('content')
@if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas')
@php
$ar_judul = ['No','NIP','Nama','Kategori','Action'];
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
                    <li class="active">Data Wali Kelas</li>
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
                        <strong class="card-title">Tahun Akademik<a href="{{ route('walas.create') }}" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                @foreach($ar_walas as $walas)
                                <tr>
                                    <td class="text-center" width="10%">{{ $no++ }}</td>
                                    <td class="text-center" width="24%">{{ $walas->nip }}</td>
                                    <td class="text-center" width="24%">{{ $walas->nama }}</td>
                                    <td class="text-center" width="24%">{{ $walas->jenis }}</td>
                                    <td class="text-center" width="20%">
                                        <form action="{{ route('walas.destroy',$walas->id) }}" method="POST">
                                        <a class="btn btn-info btn-circle" role="button" href="{{route('walas.show',$walas->id)}}" ><i class= "fa fa-list-alt"></i>&nbsp;Lihat</a>
                                        <a class="btn btn-warning btn-circle" role="button" href="{{route('walas.edit',$walas->id)}}" ><i class= "fa fa-edit"></i>&nbsp;Edit</a>
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

