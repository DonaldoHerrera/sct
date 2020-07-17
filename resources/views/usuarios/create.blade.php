@extends('layouts.admin')

@section('content')
    <form action="{{asset('usuarios')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('usuarios.form',['titleform'=>'Agregar Usuario'])
    </form>
@stop