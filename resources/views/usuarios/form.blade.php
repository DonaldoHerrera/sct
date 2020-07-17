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
                                                <input type="file"  name="avatar" id="input-file-max-fs" class="dropify" data-default-file="{{asset('avatars/persona.png')}}" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>Subir Foto de Perfil</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Nombre</label>
                                                            <input type="text" class="form-control mb-2" name="name"  placeholder="" value="{{$user->id != null ? $user->name : old('name')}}">
                                                            @error('name')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Apellido</label>
                                                            <input type="text" class="form-control mb-2" name="apellido"  placeholder="" value="{{$user->id != null ? $user->apellido : old('apellido')}}">
                                                            @error('email')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Email</label>
                                                            <input type="email" class="form-control mb-2" name="email"  placeholder="" value="{{$user->id != null ? $user->email : old('email')}}">
                                                            @error('email')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Sexo</label>
                                                            <select name="sexo" id="" class="form-control">
                                                                <option value="Hombre">Hombre</option>
                                                                <option value="Mujer">Mujer</option>
                                                            </select>
                                                           
                                                            @error('sexo')
                                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Rol</label>
                                                            <select name="rol" class="form-control" id="">
                                                                <option value="admin">Administrador</option>
                                                                <option value="general">General</option>
                                                            </select>
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
                            <h5 class="">Credenciales</h5>
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Contraseña</label>
                                                <input type="password" class="form-control mb-2" name="password"  placeholder="">
                                                @error('password')
                                                <span class="text-danger font-weight-bold">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location">Repetir contraseña</label>
                                                <input type="password" class="form-control mb-2" name="repeat_password"  placeholder="" >
                                                @error('password')
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
