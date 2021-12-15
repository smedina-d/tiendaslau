@extends('layouts.admin')
@section('cont_admin')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar producto</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 120px">#</th>
                            <th style="width: 80px">Imagen</th>
                            <th>Producto</th>
                            <th>cantidad</th>
                            <th>Precio</th>
                            <th style="width: 150px">Modificar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prod as $item)
                            <tr>
                                <td>{{ $item->sku }}</td>
                                @foreach($item->imagenes->take(1) as $imagen)
                                <td><img src="{{ asset('productos/thumbnail') }}/{{ $imagen->thumb1 }}" alt=""></td>
                                @endforeach
                                <td>{{ $item->name }}</td>
                                <td>@if($item->quantity == 0)<span class="badge bg-danger">{{ $item->quantity }}</span>@else{{ $item->quantity }}@endif</td>
                                <td>{{ $item->price }} @if($item->discount > 0)<span class="badge bg-warning">{{ $item->discount }}</span>@endif</td>
                                <td>
                                    <a href="#!" data-toggle="modal" data-target=".bd-example-modal-xl"><span class="badge bg-gradient-fuchsia">Imagenes</span></a>
                                    <a href="#!"><span class="badge bg-orange">Datos</span></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>

    <!-- Modal Editar Iamgenes -->
    <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar imagenes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

