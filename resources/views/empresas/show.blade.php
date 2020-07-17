@extends('layouts.admin')
@section('content')
    <div class="row layout-spacing">
        <!-- Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
            <div class="user-profile layout-spacing">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class=""></h3>
                        <a href="{{asset('empresas/'.$empresa->id.'/edit')}}" class="mt-2 edit-profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                            </svg>
                        </a>
                    </div>
                    <br>
                    <br>
                    <div class="text-center user-info">
                        @if($empresa->url_cv)
                            <a href="{{asset($empresa->url_cv)}}" target="_blank">
                                <img class="cv-icon" src="{{asset('curriculum.png')}}" style="width: 50%; padding: 10px;" alt="avatar">
                                <br><br>
                                <span class="font-weight-bold">cv_empresa_{{$empresa->id}}.pdf</span>
                            </a>
                        @else
                            <a href="#">
                                <span>Ningun archivo</span>
                            </a>
                        @endif
                        <br>
                        <br>
                        <p class="">{{$empresa->nombre}}</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="user-info-list">
                        <div class="ml-2">
                            <ul class="list-unstyled">
                                <li class="contacts-block__item">
                                    <span class="font-weight-bold">REPRESENTANTE: </span> <br> {!!$empresa->rep_legal!!}
                                </li>
                                <br>
                                <li class="contacts-block__item">
                                    <span class="font-weight-bold">RFC: <br></span>{{$empresa->rfc}}
                                </li>
                                <br>
                                <li class="contacts-block__item">
                                    <span class="font-weight-bold">CONTACTO: <br> </span>{!!$empresa->contacto!!}
                                </li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
            <div class="bio layout-spacing ">
                <div class="widget-content widget-content-area">
                    <div class="d-flex">
                        <h3 class="">Informacion Relevante | <a href="{{asset('empresas/'.$empresa->id.'?pdf=true')}}">Descargar PDF</a></h3>
                    </div>
                    
                    <div class="bio-skill-box">
                        <div class="row">
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Accionistas</h5>
                                        <p>{!!$empresa->accionistas !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Domicilio Fiscal</h5>
                                        <p>{{$empresa->domicilio_fiscal}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Tamaño de empresa / Entidad</h5>
                                        <p>{{$empresa->tipo_empresa}}</p>
                                        <hr>
                                        <p>{{$empresa->entidad}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Año / Afiliacion a la CMIC</h5>
                                        <p>{{$empresa->fecha_creacion}}</p>
                                        <hr>
                                        <p>{{$empresa->c_mic}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Experiencia</h5>
                                        <p>{!! $empresa->experiencia !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Empresas en relación</h5>
                                        <p>{!! $empresa->empresas_relacion !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Invitación</h5>
                                        <p>{!! $empresa->invitacion !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Contrato</h5>
                                        <p>{!! $empresa->contrato !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
