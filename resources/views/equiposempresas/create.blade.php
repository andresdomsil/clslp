@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
           
            <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                  <form action="#" method="post" >
                   
                      <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                      <h3 class="text-center">Bienvenido</h3>
                      <hr>
                      <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
                               
                               <label for="">Empresas</label>
                                <select class="form-control select2" name="factorys_S" style="width: 100%;">
                                   <option value="">--- Escoja una Empresa ----</option>
                                    @foreach($data as $Empresa)
                                    <option value="{{ $Empresa['id']}}">{{$Empresa['nombre']}}</option>
                                    @endforeach
                                </select>      
                            </div>
                    </div>
                    <hr>
                    <hr>
                      <div class="form-group col-md-6 col-md-offset-3">
                          <button type="submit"  class="btn btn-success btn-block" onclick="window.location='{{ route("EquipoEmpresas") }}'">Continuar
                      </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
