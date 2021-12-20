@extends('layouts.admin')
@section('cont_admin')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Imagenes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 80px">Imagen</th>
                            <th style="width: 150px">Modificar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($imagenes as $item)
                            <tr>
                                <td><img src="{{ asset('productos/thumbnail') }}/{{ $item->thumb1 }}" alt=""></td>
                                <td>
                                    <a href="#!" data-toggle="modal" data-target="#exampleModal" onclick="triggerData('{{ $item->product_id }}','{{$item->id}}')"><span class="badge bg-gradient-fuchsia">Cambiar</span></a>
                                    <a href="#!"><span class="badge bg-orange">Eliminar</span></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('update-images') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="text" name="prod_id" id="prod_id" >
                        <input type="text" name="img_id" id="img_id" >
                        <input type="hidden" name="name" class="form-control" id="prod_name">
                        <input type="hidden" name="category" class="form-control" id="prod_cat">
                        <input type="hidden" name="price" class="form-control" id="prod_price">
                        <input type="hidden" name="taxes" class="form-control" value="0">
                        <input type="hidden" name="description" class="form-control" id="prod_desc">
                        <input type="hidden" name="quantity" class="form-control" id="prod_qty">

                        <div class="form-group">
                            <label for="">Imagen a reemplazar</label>
                            <input type="file" name="file[]" multiple class="form-control" accept="image/*">
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
        function triggerData(id,iid){
            $.ajax({
                method: 'get',
                url: '/get-product/' + id,
                success: (res) => {
                    $('#prod_id').val(id);
                    $('#img_id').val(iid);
                    $('#prod_name').val(res.name);
                    $('#prod_cat').val(res.category);
                    $('#prod_price').val(res.price);
                    $('#prod_desc').val(res.description);
                    $('#prod_qty').val(res.quantity);
                }
            });
        };
    </script>
@endsection

