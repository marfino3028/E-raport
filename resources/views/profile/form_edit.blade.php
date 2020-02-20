<!-- Illustrations -->
@extends('layouts.index') @section('content') @php $ar_profile = App\User::all(); @endphp @foreach ($dataa as $edit)
<form method="POST" action="{{route('profile.update',$edit->id)}}" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="breadcrumbs ">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="text-left">
                <div class="form-group row">
                    <div class="col-8">
                        <br>
                        <label>&nbsp;&nbsp;Nama Anda</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$edit->name}}"> @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <label>&nbsp;&nbsp;Email Anda</label>
                        <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ $edit->email }}" /> @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <label>&nbsp;&nbsp;Password</label>
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="" /> @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        @if(!empty(Auth::user()->foto))
                        <img class="img-thumbnail" src="{{asset('imguser/'.Auth::user()->foto)}}"></td>
                        @else
                        <img class="img-thumbnail" src="{{asset('imguser/no-profile.png')}}" alt=""> 
                        @endif
                        <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-8">
                        <a  class="btn btn-secondary" href="{{url('/profile')}}"><i class="fa fa-chevron-left">&nbsp;Go Back</i></a>
                        <button name="proses" type="submit" class="btn btn-warning" value="ubah">Ubah</button>&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach @endsection