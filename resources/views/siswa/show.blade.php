@extends('layouts.index')
@section('content')
	@foreach ($ar_siswa as $siswa)
	<div class="card mb-3 mx-auto" style="max-width: 700px;">
		<div class="row no-gutters">
		  <div class="col-md-4">
			@if(!empty($siswa->foto))
			<img src="{{ asset('imgsiswa') }}/{{ $siswa->foto }}" alt="">
				 @else
			<i class="fa fa-user"></i>
			@endif
		  </div>
		  <div class="col-md-8">
			<div class="card-body"> <br>
			  <h5 class="card-title text-center">DETAIL SISWA</h5> <br>
			  <table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
				  <tr>
					  <td>Nama</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $siswa->nama }}</td>
				  </tr>
				  <tr>
					  <td>NIS</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $siswa->nis }}</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td>&nbsp; &nbsp;{{ $siswa->kelas }}</td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>:</td>
					<td>&nbsp; &nbsp;{{ $siswa->jenis }}</td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td>&nbsp; &nbsp;{{ $siswa->tempat_lahir }}</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td>&nbsp; &nbsp;{{ $siswa->tanggal_lahir }}</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>&nbsp; &nbsp;{{ $siswa->alamat }}</td>
				</tr>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
		@endforeach
		<a rel="nofollow" href="{{ url('/siswa') }}" class="btn btn-primary btn-lg">Kembali</a>
@endsection