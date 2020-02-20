@extends('layouts.index') @section('content')
<div class="breadcrumbs ">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Show Profile</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Show Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show Profile</h6>
    </div>
    <div class="card-body">
        <div class="text-left">
            @if(!empty(Auth::user()->foto))
            <img class="img-fluid" src="{{asset('imguser/'.Auth::user()->foto)}}"></td>
            @else
            <img class="img-fluid" src="{{asset('imguser/no-profile.png')}}" alt=""> 
            @endif
            <table width="60%" cellpadding="10" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Jenis User</td>
                        <td>{{ Auth::user()->role }}</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td> <a href="{{url('/profile')}}"><i class="far fa-hand-point-left"> Go Back</i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection