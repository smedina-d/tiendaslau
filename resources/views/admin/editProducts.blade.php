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
                                    <a href="{{ url('edit/images',$item->id) }}"><span class="badge bg-gradient-fuchsia">Imagenes</span></a>
                                    <a href="#!" data-toggle="modal" data-target="#exampleModal" onclick="triggerData('{{ $item->id }}')"><span class="badge bg-orange">Datos</span></a>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('update-images') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div  class="form-group">
                            <label for="">Nombre del Producto</label>
                            <input type="text" name="name" class="form-control" id="prod_name">
                        </div>
                        <input type="hidden" name="prod_id" id="prod_id" >
                        <div class="form-group">
                            <label for="">Categoria</label>
                            <select name="category" id="prod_cat" class="form-control">
                                <option value="" disabled selected>Seleccione una categoria</option>
                                @foreach($cat as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" name="price" class="form-control" id="prod_price">
                        </div>
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" name="description" class="form-control" id="prod_desc">
                        </div>
                        <div class="form-group">
                            <label for="">Cantidad</label>
                            <input type="text" name="quantity" class="form-control" id="prod_qty">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function triggerData(id){
            $.ajax({
                method: 'get',
                url: '/get-product/' + id,
                success: (res) => {
                    $('#prod_id').val(id);
                    $('#prod_name').val(res.name);
                    $('#prod_cat option[value="'+res.category+'"]').attr("selected", "selected");
                    $('#prod_price').val(res.price);
                    $('#prod_desc').val(res.description);
                    $('#prod_qty').val(res.quantity);
                }
            });
        };
    </script>
@endsection

