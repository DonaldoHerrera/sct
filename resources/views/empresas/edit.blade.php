@extends('layouts.admin')

@section('content')
    <form action="{{asset('empresas/'.$empresa->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('put')
        @include('empresas.form',['titleform'=>'Actualizar empresa'])
    </form>
@stop
