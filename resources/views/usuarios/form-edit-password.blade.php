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
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>