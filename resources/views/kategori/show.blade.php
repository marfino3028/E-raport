@extends('layouts.index')
@section('content')
@foreach ($ar_kategori as $kat)
<div class="card mb-3 mx-auto" style="max-width: 600px;">
		<div class="row no-gutters">
    <div class="col-md-12">
			<div class="card-body">
        <h5 class="card-title text-center">DETAIL KATEGORI</h5>       
			  <table align="center" width="25%" border="0" cellspacing="2" cellpadding="0">
      <tr>
          <td>Kategori</td>
          <td>:</td>
          <td>&nbsp; &nbsp;{{ $kat->nama }}</td>
      </tr>
			  </table>
      </div>
    </div>
</div>
    <a rel="nofollow" href="{{ url('/kategori') }}" class="btn btn-primary btn-lg">Kembali</a>
</div>
@endforeach

@endsection