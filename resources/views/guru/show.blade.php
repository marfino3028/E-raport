@extends('layouts.index')
@section('content')
@foreach ($ar_guru as $guru)
<div class="card mb-3 mx-auto" style="max-width: 700px;">
	<div class="row no-gutters">
		<div class="col-md-4">
			@if(!empty($guru->foto))
			<img src="{{ asset('imgguru') }}/{{ $guru->foto }}" alt="">
			@else
			<i class="fa fa-user"></i>
			@endif
		</div>
		<div class="col-md-8">
			<div class="card-body"><br>
				<h5 class="card-title text-center">DETAIL GURU</h5>
				<table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->nama }}</td>
					</tr>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->nip }}</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->tempat_lahir}}</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->tanggal_lahir }}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->alamat }}</td>
					</tr>
					<tr>
						<td>No Hp</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->hp }}</td>
					</tr>
					<tr>
						<td>Email Address</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $guru->email }}</td>
						
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="{{ url('/guru') }}" class="btn btn-primary btn-lg">Kembali</a>
</div>
@endforeach
@endsection