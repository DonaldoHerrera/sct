@extends('layouts.admin')
@section('content')
    <div class="row layout-spacing">
        <!-- Content -->
        <div class="col-xl-3 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
            <div class="user-profile layout-spacing">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        
                    </div>
                    <br>
                    <br>
                    <div class="text-center user-info">
                        <a  target="_blank">
                            <img src="{{asset($user->avatar)}}" style="width: 50%; padding: 10px;" alt="avatar">
                            <br><br>
                        </a>
                        <p class="text-uppercase">{{$user->name}} {{$user->apellido}}</p>
                        <p class="text-uppercase">{{$user->rol}}</p>

                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                <form action="{{asset('usuarios/'.$user->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    @include('usuarios.form-edit',['titleform'=>'Actualizar usuario'])
                </form>
            </div>
        </div>
        </div>
    </div>
    
@stop
