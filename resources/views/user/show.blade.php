@extends('layouts.index')
@section('content')
	@foreach ($ar_user as $user)
	<div class="card mb-3 mx-auto" style="max-width: 700px;">
		<div class="row no-gutters">
		  <div class="col-md-4">
			@if(!empty($user->foto))
			<img src="{{ asset('imguser') }}/{{ $user->foto }}" alt="">
				 @else
                 <img src="{{ asset('imguser') }}/no-profile.png" alt="">
			@endif
		  </div>
		  <div class="col-md-8">
			<div class="card-body"> <br>
                <h5 class="card-title text-center">DETAIL USER</h5> <br>
			  <table align="center" width="70%" border="0px" cellspacing="2" cellpadding="0">
				  <tr>
					  <td>Nama</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $user->name }}</td>
				  </tr>
				  <tr>
					  <td>Email</td>
					  <td>:</td>
					  <td>&nbsp; &nbsp;{{ $user->email }}</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td>&nbsp; &nbsp;{{ $user->role }}</td>
				</tr>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
		@endforeach
		<a rel="nofollow" href="{{ url('/user') }}" class="btn btn-primary btn-lg">Kembali</a>
@endsection