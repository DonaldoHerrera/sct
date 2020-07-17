@extends('layouts.admin')
@section('datatables-css')
@include('layouts.datatables.datatables_css')
@stop
@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="d-flex justify-content-start">
                <h3>LISTADO DE USUARIOS</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{asset('/usuarios/create')}}" type="button" class="btn btn-outline-primary">Agregar Usuario</a>
            </div>
            <div class="table-responsive mb-4 mt-4">
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electrónico</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame mr-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" style="width:30px; height:30px;" src="{{asset($user->avatar)}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> {{$user->name}} </p>
                                </div>
                            </td>
                            <td>{{$user->apellido}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-uppercase">
                                <span class=" badge {{$user->rol == 'admin' ? 'badge-success' : 'badge-danger'}}">{{$user->rol}}</span>
                            </td>
                            <td>
                                <a href="{{asset('/usuarios/'.$user->id)}}" class="btn-sm btn btn-outline-primary">Detalle</a>
                                <form action="{{asset('usuarios/'.$user->id)}}" style="display:inline-block;" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electrónico</th>
                            <th>Fecha Registro</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('datatables-js')
@include('layouts.datatables.datatables_js')
@stop