@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','NIS','Nama','Kelas','Action'];
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
                    <li class="active">smk Smk</li>
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
                    <strong class="card-title">Setting Nilai<a href="{{ route('penilaiansmp.create') }}" role="button" style="float: right;" class="btn btn-info btn-sm my-2 my-sm-0"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></strong>
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
                                @foreach($ar_penilaian as $penilaian)
                                <tr>
                                    <td class="text-center" width="5%">{{ $no++ }}</td>
                                    <td class="text-center" width="13,5%">{{ $penilaian->nis }}</td>
                                    <td class="text-center" width="13,5%">{{ $penilaian->nama }}</td>
                                    <td class="text-center" width="13,5%">{{ $penilaian->kelas }}</td>
                                    <td class="text-center" width="13,5%">
                                            <form action="{{ route('penilaiansmp.destroy',$penilaian->id) }}" method="POST">
                                            <a class="btn btn-info btn-circle" role="button" href="{{ url('raport-smp',$penilaian->siswa_id)}}" ><i class= "fa fa-print"></i>&nbsp;Cetak Raport</a>
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
@endsection

