@extends('layouts.index')
@section('content')
	@foreach ($ar_smk as $smk)
	<div class="card mb-3 mx-auto" style="max-width: 700px;">
		<div class="row no-gutters">
		  <div class="col-md-4">
			@if(!empty($smk->foto))
			<img src="{{ asset('imgsiswa') }}/{{ $smk->foto }}" alt="">
				 @else
			<i class="fa fa-user"></i>
			@endif
		  </div>
		  <div class="col-md-8">
			<div class="card-body">
			  <h5 class="card-title text-center">DETAIL SISWA SMK</h5>
			  <table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
				  <tr>
					  <td>Nama</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->nama }}</td>
				  </tr>
				  <tr>
					  <td>NIS</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->nis }}</td>
				  </tr>
				  <tr>
					  <td>Kelas</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->kelas }}</td>
				  </tr>
				  <tr>
					  <td>Kategori</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->jenis }}</td>
				  </tr>
				  <tr>
					  <td>Tempat Lahir</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->tempat_lahir}}</td>
				  </tr>
				  <tr>
					  <td>Tanggal Lahir</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->tanggal_lahir}}</td>
				  </tr>
				  <tr>
					  <td>Alamat</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $smk->alamat}}</td>
				  </tr>
			  </table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="{{ url('/siswa_smk') }}" class="btn btn-primary btn-lg">Kembali</a>
</div>
	@endforeach
@endsection