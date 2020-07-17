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
                                                            @error('apellido')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Correo Electrónico</label>
                                                            <input type="text" class="form-control mb-2" name="email"  placeholder="" value="{{$user->id != null ? $user->email : old('email')}}">
                                                            @error('email')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Sexo</label>
                                                            <input type="text" class="form-control mb-2" name="sexo"  placeholder="" value="{{$user->id != null ? $user->sexo : old('sexo')}}">
                                                            @error('sexo')
                                                            <span class="text-danger font-weight-bold">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
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
    </div>
</div>
