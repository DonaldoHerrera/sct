@extends('layouts.admin')
@section('content')
    <div class="row layout-top-spacing" id="cancel-row">
        @foreach($empresas as $empresa)
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12  layout-spacing">
            <div class="widget-content br-6">
                <div class="card component-card_1">
                    <div class="card-body">
                        <div class="icon-svg">
                            <svg> ... </svg>
                        </div>
                        <h5 class="card-title">Simple</h5>
                        <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$empresas->links()}}
    </div>
@stop
