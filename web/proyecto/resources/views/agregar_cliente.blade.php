@extends('layouts/master')
@section('contenido')

  <div class="row mt-5 ">
      <div class="col-12 col-md-6 col-lg-5 mx-auto">
          <div class="card">
              <div class="card-header bg-primary">
                  <span>Agregar Cliente</span>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                      <label for="nombreC-txt" class="form-label">Nombre</label>
                      <input type="text" id="nombreC-txt" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="fono-txt" class="form-label">Telefono</label>
                      <input type="number" id="fono-txt" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="nomP-txt" class="form-label">Nombre Producto Comprado</label>
                      <input type="text" id="nomP-txt" class="form-control">
                  </div>
                 
                  <div class="mb-3">
                      <label for="tipo-select" class="form-label">Tipo</label>
                      <select  id="tipo-select" class="form-select">
                          
                      </select>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Entega Inmediata
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      A Pedido
                    </label>
                  </div>
                <!--  <div class="mb-3">
                    <label for="legendario-rb" class="form-label">Legendario</label>
                    <div class="form-check form-check-inline"> <!-el checked predefine seleccion el si o el no--
                        <input type="radio" name="legendario-rb" checked id="legendario-si" class="form-check-input">
                        <label for="legendario-si" class="form-check-label">Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="legendario-rb" id="legendario-no" class=" form-check-input">
                        <label for="legendario-no" class="form-check-label">No</label>
                    </div>
                  </div>-->

                  <div class="card-footer d-grid gap-1">
                      <button type="button" class="btn btn-info">Agregar</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
@section('javascript')
    <script src="{{asset('js/agregar_producto.js')}}"></script>
@endsection