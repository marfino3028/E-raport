@extends('layouts.index') @section('content')
@if(Auth::user()->role == 'administrator' || Auth::user()->role == 'walas')
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
            <div class="card-header py-3">
                <br>
                <br>
                <br>
                <br>
                <section class="banner-area">
                    <div class="container">
                        <div class="row fullscreen align-items-center justify-content-between">
                            <div class="col-lg-6 col-md-6 banner-left">
                                <h1>{{Auth::user()->name}}<br><sup>{{Auth::user()->role}}</sup></h1>
                                <p>
                                    Email : {{Auth::user()->email}}
                                </p>
                                <a href="{{route('profile.edit',Auth::user()->id)}}" class="btn btn-info" style="text-decoration: none;"><i class="fa fa-cog"></i>&nbsp;Edit Profile</a>
                            </div>
                            <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                                @if(!empty(Auth::user()->foto))
                                <img class="img-fluid" src="{{asset('imguser/'.Auth::user()->foto)}}"></td>
                                @else
                                <img class="img-fluid" src="{{asset('imguser/no-profile.png')}}" alt=""> 
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
  @else
  @include('layouts.terlarang')
  @endif
@endsection