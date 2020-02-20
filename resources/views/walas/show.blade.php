@extends('layouts.index')
@section('content')
@foreach ($ar_walas as $walas)
<div class="card mb-3 mx-auto" style="max-width: 600px;">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card-body">
				<h5 class="card-title text-center">DETAIL WALI KELAS</h5>
				<table align="center" width="50%" border="0" cellspacing="2" cellpadding="0">
					<tr>
						<td>Mata Pelajaran</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $walas->nip}}</td>
                    </tr>
                    <tr>
						<td>Nama</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $walas->nama }}</td>
					</tr>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $walas->jenis }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="{{ url('/walas') }}" class="btn btn-primary btn-lg">Kembali</a>
</div>
@endforeach
@endsection