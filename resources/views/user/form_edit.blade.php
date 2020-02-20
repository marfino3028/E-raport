<!-- Illustrations -->
@extends('layouts.index') @section('content') 
@php 
$ar_role = ['a'=>'Administrator', 'b'=>'Walas' ,'c'=>'Siswa']; 
@endphp @foreach ($data as $edit)
<form method="POST" action="{{route('user.update',$edit->id)}}" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                  <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Kelola Users</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Kelola Users</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 col-7">
                    <div class="card-body">
                        <div class="text-left">
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Nama Anda</label>
                                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$edit->name}}"> @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Email Anda</label>
                                    <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ $edit->email }}" /> @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Role User</label>
                                    <select name="role" class="custom-select">
                                        <option value="">Pilih Kategori User</option>
                                        @foreach ($ar_role as $roles) 
                                        @php 
                                        $rol = ($edit->role == $roles) ? 'selected' : ''; 
                                        @endphp
                                        <option value="{{ $roles }}" {{$rol}}>{{ $roles }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <label>&nbsp;&nbsp;Password</label>
                                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="" /> @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                  <a href="{{url('/user')}}" class="btn btn-secondary"><i class="far fa-hand-point-left">&nbsp;Go Back</i></a>
                                    <button name="proses" type="submit" class="btn btn-warning" value="ubah">Ubah</button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 col-4">
                  <div class="card-body">
                  <div class="form-group row">
                    <div class="col-8">
                      @if(!empty($edit->foto))
                      <img class="img-thumbnail" src="{{ asset('imguser') }}/{{ $edit->foto }}">
                      @else
                      <img class="img-thumbnail" src="{{asset('imguser/no-profile.png')}}" alt=""> 
                      @endif
                      <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file">
                    </div>
                  </div>
                  </div>
                </div>
                </div>
            </div>
    </div>
</form>
@endforeach @endsection