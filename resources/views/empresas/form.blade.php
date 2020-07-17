<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="general-info" class="section general-info">
                        <div class="info">
                            <h6 class="">{{$titleform}} </h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                            <div class="upload mt-4 pr-md-4">
                                                <input type="file"  name="cv" id="input-file-max-fs" class="dropify" data-default-file="{{asset('curriculum.png')}}" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>Subir Curriculum</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Nombre de la empresa</label>
                                                            <input type="text" class="form-control mb-2" name="nombre"  placeholder="" value="{{$empresa->id != null ? $empresa->nombre : old('nombre')}}">
                                                            @error('nombre')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="dob-input">Año de creación</label>
                                                        <div class=" d-block">
                                                            <div class="form-group mr-1">
                                                                <select name="fecha_creacion" class="form-control">
                                                                    <option>Año</option>
                                                                    <option value="2020" selected>2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">1999</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                    <option value="1989">1989</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1984">1984</option>
                                                                    <option value="1983">1983</option>
                                                                    <option value="1982">1982</option>
                                                                    <option value="1981">1981</option>
                                                                    <option value="1980">1980</option>
                                                                </select>
                                                                @error('fecha_creacion')
                                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Representante legal</label>
                                                            <input type="text" class="form-control mb-2" name="rep_legal"  placeholder="" value="{{$empresa->id != null ? $empresa->rep_legal : old('rep_legal')}}">
                                                            @error('rep_legal')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">RFC</label>
                                                            <input type="text" class="form-control mb-2" name="rfc"  placeholder="" value="{{$empresa->id != null ? $empresa->rfc : old('rfc')}}">
                                                            @error('rfc')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <h5 class="">Acerca de</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Entidad</label>
                                                <input type="text" class="form-control mb-2" name="entidad"  placeholder=""value="{{$empresa->id != null ? $empresa->entidad : old('entidad')}}">
                                                @error('entidad')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location">Tipo de empresa</label>
                                                <input type="text" class="form-control mb-2" name="tipo_empresa"  placeholder="" value="{{$empresa->id != null ? $empresa->tipo_empresa : old('tipo_empresa')}}">
                                                @error('tipo_empresa')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Afiliación Cmic</label>
                                                <select class="form-control" name="c_mic" >
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @error('c_mic')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website1">Contacto</label>
                                                <input type="text" class="form-control mb-2"name="contacto"  placeholder="" value="{{$empresa->id != null ? $empresa->contacto : old('contacto')}}">
                                                @error('contacto')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <h5 class="">Información</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website1">Experiencia</label>
                                                <input type="text" class="form-control mb-2" name="experiencia"  placeholder="" value="{{$empresa->id != null ? $empresa->experiencia : old('experiencia')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website1">Relación con empresas</label>
                                                <input type="text" class="form-control mb-4" name="empresas_relacion"  placeholder="" value="{{$empresa->id != null ? $empresa->empresas_relacion : old('empresas_relacion')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Domicilio Fiscal</label>
                                                <textarea type="text" class="form-control mb-2" name="domicilio_fiscal"  placeholder="" >{{$empresa->domicilio_fiscal}}</textarea>
                                                @error('domicilio_fiscal')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Accionistas</label>
                                                <textarea type="text" class="form-control mb-2" name="accionistas"  placeholder="">{{$empresa->accionistas}}</textarea>
                                                @error('accionistas')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 mb-4 col-md-12 layout-spacing">
                    <div id="contact" class="section contact">
                        <div class="info">
                            <h5 class="">Invitaciónes y contratos</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="website1">Invitación</label>
                                                <textarea name="invitacion" class="form-control" id="" cols="30" rows="10">{{$empresa->id != null ? $empresa->invitacion : old('invitacion')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Contrato</label>
                                                <textarea type="text" class="form-control mb-2" name="contrato"  placeholder="" >{{$empresa->contrato}}</textarea>
                                                @error('contrato')
                                                    <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="account-settings-footer">
        <div class="as-footer-container">
            <button  class="btn btn-warning" type="reset">Limpiar formulario</button>
            <button id="multiple-messages" class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
</div>
