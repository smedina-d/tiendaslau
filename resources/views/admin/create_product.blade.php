@extends('layouts.admin')
@section('cont_admin')
<div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Bordered Table</h3>
                                    @if(Session::get('message'))
                                    dale listo
                                        @endif

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{ url('create/product') }}" method="post" enctype="multipart/form-data" class="form-group">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Nombre del Producto</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Categoria</label>
                                            <select name="category" id="" class="form-control">
                                                <option value="" disabled selected>Seleccione una categoria</option>
                                                @foreach($cat as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="row form-group">
                                            <div class="md-col-2">
                                                <div class="form-group">
                                                    <label for="">Precio</label>
                                                    <input type="text" name="price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="md-col-2">
                                                <div class="form-group">
                                                    <label for="">Impuesto</label>
                                                    <input type="number" name="taxes" class="form-control" value="16"
                                                           readonly>
                                                </div>
                                            </div>
                                            <div class="md-col-2">
                                                <div class="form-group">
                                                    <label for="">Descuento</label>
                                                    <input type="number" name="taxes" class="form-control" value="0">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            <input type="text" name="description" class="form-control"
                                                   placeholder="descripción del producto">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cantidad disponible</label>
                                            <input type="number" name="quantity" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Imagenes del Producto</label>
                                            <input type="file" name="file[]" multiple class="form-control" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-primary">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">

                                </div>
                            </div>
                        </div>

                    </div>
@endsection
