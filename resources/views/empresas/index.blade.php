@extends('layouts.admin')

@section('datatables-css')
    @include('layouts.datatables.datatables_css')
@stop

@section('content')
    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6" id="accordion">
                <div class="" style="cursor: pointer;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3 class="text-uppercase">Filtro avanzado</h3>
                </div>
                <form action="{{asset('empresas/')}}" method="GET" id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    @csrf
                   <input type="hidden" name="like" value="1">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="">Nombre de la empresa</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="">Representante</label>
                                <input type="text" name="rep_legal" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="">Experiencia</label>
                                <input type="text" name="experiencia" class="form-control">
                            </div>   
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="">Invitación</label>
                                <input type="text" name="invitacion" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="">Contrato</label>
                                <input type="text" name="contrato" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="submit" value="Buscar..." class="btn  btn-outline-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div> <br>
            <div class="widget-content widget-content-area br-6">
                <div class="d-flex justify-content-between">
                    <h3>LISTADO DE EMPRESAS</h3>
                    @if(Auth::user()->rol == 'admin')
                       <div>
                            <a href="{{asset('/empresas/create')}}" type="button" class="btn btn-outline-primary">Agregar Empresa</a>
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary">Agregar Excel</button>
                       </div>
                    @endif
                </div>
               
                <form action="{{asset('empresas/import/excell')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registrar nueva empresa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Archivo excel .xsls</label>
                                        <input type="file" class="form-control" name="file-import">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-responsive mb-4 mt-4">
                    <table id="zero-config" class="table table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Representante</th>
                            <th>Experiencia</th>
                            <th>Invitación</th>
                            <th>Contrato</th>
                            <th class="no-content"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->nombre}}</td>
                            <td>{!! $empresa->rep_legal !!}</td>
                            <td>{!! $empresa->experiencia !!}</td>
                            <td>{!! $empresa->invitacion !!}</td>
                            <td>{!! $empresa->contrato !!}</td>
                            <td>
                                <a target="_blank" href="{{asset('/empresas/'.$empresa->id)}}" class="btn-sm btn btn-outline-primary">Detalle</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Representante</th>
                            <th>Experiencia</th>
                            <th>Invitación</th>
                            <th>Contrato</th>
                            <th class=""></th>
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
