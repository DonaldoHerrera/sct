@extends('layouts.admin')

@section('content')
    <form action="{{asset('empresas')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('empresas.form',['titleform'=>'Agregar Empresa'])
    </form>
@stop
