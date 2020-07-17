<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de la empresa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }
 
        body {
            margin: 3cm 2cm 2cm;
        }
    </style>
</head>
<body>
    <div class="container  ">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead> 
                        <tr>
                            <th>Nombre: {{$empresa->nombre}}</th>
                        </tr>
                        <tr>
                            <th>Representante legal: {{$empresa->rep_legal}}</th>
                        </tr>
                        <tr>
                            <th>RFC: {{$empresa->rfc}}</th>
                        </tr>
                        <tr>
                            <th>Contacto: {!! $empresa->contacto !!}</th>
                        </tr>
                        <tr>
                            <th> Accionistas: {!! $empresa->accionistas !!}</th>
                        </tr>
                        <tr>
                            <th>Domicilio fiscal: {{$empresa->domicilio_fiscal}}</th>
                        </tr>
                        <tr>
                            <th>Tamaño de la empresa: {{$empresa->tipo_empresa}}</th>
                        </tr>
                        <tr>
                            <th> Entidad: {{$empresa->entidad}}   </th>
                        </tr>
                        <tr>
                            <th>Fecha: {{$empresa->fecha_creacion}}</th>
                        </tr>
                        <tr>
                            <th>  Afiliado a la CMIC: {{$empresa->c_mic}}</th>
                        </tr>
                        <tr>
                            <th>Experiencia: {!! $empresa->experiencia !!}</th>
                        </tr>
                        <tr>
                            <th> Relaciones con empresas: {!! $empresa->empresas_relacion !!}</th>
                        </tr>
                        <tr>
                            <th> Invitación: {!! $empresa->invitacion !!}</th>
                        </tr>
                        <tr>
                            <th> Contrato: {!! $empresa->contrato !!}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>