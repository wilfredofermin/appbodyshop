<div class="modal fade" id="myModalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-body">
            <form class="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <div class="card card-signup">
                        <div class="header header-primary text-center">
                            <img src="{{asset('img/add-user.png')}}"  class="img-fluid" alt="Responsive image">
                            <h4>BSCONTROL - REGISTRO</h4>
                        </div>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <div class="form-group is-empty"><input type="text" id="myNonmbre" class="form-control" placeholder=" Nombre completo..." name="name" value="{{ old('name') }}" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-group is-empty"><input type="email" class="form-control" placeholder=" Correo electronico..." name="email" value="{{ old('email') }}" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <div class="form-group is-empty"><input type="password" placeholder="Password..." class="form-control" name="password" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <div class="form-group is-empty"><input type="password" placeholder="Confirmar Password..." class="form-control" name="password_confirmation" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                   <i class="material-icons"rel="tooltip" title=Sucursal data-placement="bottom" data-html="true" >store</i>
                                </span>
                                <select class="selectpicker" name="sucursal" data-style="btn-btn-info" data-width="100%">
                                        @foreach($sucursales as $sucursal)
                                            <option value="{{$sucursal->name}}">{{$sucursal->name}}</option>
                                        @endforeach
                                 </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                   <i class="material-icons" rel="tooltip" title=Departamento data-placement="bottom" data-html="true">work</i>
                                </span>
                                <select class="selectpicker" name="departament_id" data-style="btn-btn-info" data-width="100%">
                                    @foreach($departaments as $departamento)
                                        <option value="{{$departamento->id}}">{{$departamento->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div align="center">
                                <button type="submit"  class="btn btn-primary btn-raised"><i class="material-icons">done</i> ACCESAR</button>
                                {{--Linia de division--}}
                            </div>
                            <div align="right"><button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cerrar</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>