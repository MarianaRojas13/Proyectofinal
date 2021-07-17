@extends('layouts/master')
@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hower table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr class="table-info">
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Stock</td>
                        <td>Tipo</td>
                    </tr>
                </thead>
                <tbody id="tbody-producto">

                </tbody>
            </table>
        </div>
    </div>
@endsection