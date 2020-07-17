@extends('layouts.admin')

@section('content')
<div class="row layout-top-spacing">
   <div class="card component-card_4">
      <div class="card-body">
         <div class="user-profile">
            <img src="{{asset('empresas.png')}}" class="" width="100%" alt="...">
         </div>
         <div class="user-info">
            <h5 class="card-user_name">Luke Ivory</h5>
            <p class="card-user_occupation">EMPRESAS</p>
            <div class="card-star_rating">
               <span class="badge badge-primary">{{$empresas}} Empresa(s) registradas</span>
            </div>
            <p class="card-text"> Resumen de las empresas registradas en nuestro sistema SCT</p>
            <a href="{{asset('empresas/create')}}" class="btn btn-outline-primary">Agregar empresa</a>
         </div>
      </div>
   </div>
   <div class="card component-card_4">
      <div class="card-body">
         <div class="user-profile">
            <img src="{{asset('avatars/persona.png')}}" class="" width="100%" alt="...">
         </div>
         <div class="user-info">
            <h5 class="card-user_name">Luke Ivory</h5>
            <p class="card-user_occupation">USUARIOS</p>
            <div class="card-star_rating">
               <span class="badge badge-primary">{{$users}} Usuario(s) registrados</span>
            </div>
            <p class="card-text"> Resumen de los usuarios registrados en nuestra sistema SCT </p>
            <a href="{{asset('usuarios/create')}}" class="btn btn-outline-primary">Agregar usuario</a>
         </div>
      </div>
   </div>
</div>

@endsection