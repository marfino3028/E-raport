@extends('layouts.index')
@section('content')
@foreach ($ar_tahun as $thn)
<div class="card mb-3 mx-auto" style="max-width: 600px;">
	<div class="row no-gutters">
		<div class="col-md-12">
			<div class="card-body">
				<h5 class="card-title text-center">DETAIL TAHUN AJARAN</h5> <br>
				<table align="center" width="50%" border="0" cellspacing="2" cellpadding="0">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $thn->tahun }}</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>:</td>
						<td>&nbsp; &nbsp;{{ $thn->semester }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<a rel="nofollow" href="{{ url('/tahun_akademik') }}" class="btn btn-primary btn-lg">Kembali</a>
</div>
@endforeach
@endsection