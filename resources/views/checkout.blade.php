
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('layouts.2lvl_head')

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
@include('layouts.2lvl_menu')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Completa tu orden {{ Session::getId() }}</h1>
{{--            <ol class="breadcrumb">--}}
{{--                <li><a href="#">Home</a></li>--}}
{{--                <li><a href="#">Shop</a></li>--}}
{{--                <li class="active">Checkout</li>--}}
{{--            </ol>--}}
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                @guest
                <div class="col_half">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Ya eres usuario? <a href="#!" data-toggle="modal" data-target="#exampleModalCenter">Click aqui para entrar</a>
                        </div>
                    </div>
                </div>
                @endguest
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h3>Direccion de cobro</h3>

                        <p>Estos datos deben coincidir con la informacion bancaria de su tarjeta de débito o crédito</p>

                        <form id="billing-form" name="billing-form" class="nobottommargin" action="#" method="post">

                            <div class="col_full">
                                <label for="billing-form-name">Nombre Completo:</label>
                                <input type="text" id="billing-form-name" name="billing-form-name" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="billing-form-address">Dirección:</label>
                                <input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="billing-form-city">Ciudad / Colonia</label>
                                <input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="billing-form-email">Correo electrónico:</label>
                                <input type="email" id="billing-form-email" name="billing-form-email" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="billing-form-phone">Teléfono celular:</label>
                                <input type="text" id="billing-form-phone" name="billing-form-phone" value="" class="sm-form-control" />
                            </div>

                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3 class="">Shipping Address</h3>

                        <form id="shipping-form" name="shipping-form" class="nobottommargin" action="#" method="post">

                            <div class="col_half">
                                <label for="billing-form-name">Nombres:</label>
                                <input type="text" id="billing-form-name" name="billing-form-name" value="" class="sm-form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="billing-form-lname">Apellidos:</label>
                                <input type="text" id="billing-form-lname" name="billing-form-lname" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="billing-form-address">Dirección:</label>
                                <input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="billing-form-city">Ciudad / Colonia</label>
                                <input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <label for="shipping-form-message">Puntos de referencia <small>*</small></label>
                                <textarea class="sm-form-control" id="shipping-form-message" name="shipping-form-message" rows="4" cols="30"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="clear bottommargin"></div>
                    <div class="col-md-6">
                        <div class="table-responsive clearfix">
                            <h4>Tus Artículos</h4>

                            <table class="table cart">
                                <thead>
                                <tr>
                                    <th class="cart-product-thumbnail">&nbsp;</th>
                                    <th class="cart-product-name">Producto</th>
                                    <th class="cart-product-quantity">Cantidad</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <input type="hidden" id="contador" value="{{ sizeof(MyCart::myCart()) }}">
                                @foreach(MyCart::myCart() as $key => $carrito)
                                    <tr class="cart_item">
                                        <td class="cart-product-thumbnail">
                                            <a href="#"><img width="64" height="64" src="{{ asset('productos/thumbnail') }}/{{ $carrito['thumb'] }}" alt="Pink Printed Dress"></a>
                                        </td>

                                        <td class="cart-product-name">
                                            <a href="#">{{ $carrito['name'] }}</a>
                                        </td>
                                        <td class="cart-product-quantity">
                                            <div class="quantity clearfix">
                                                {{--                                    <input type="button" value="-" class="minus">--}}
                                                <input type="text" name="quantity" value="{{ $carrito['qty'] }}" class="qty" readonly/>
                                                {{--                                    <input type="button" value="+" class="plus">--}}
                                            </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            <span class="amount">${{ $carrito['price'] }}</span>
                                        </td>
                                        <input type="hidden" name="total[{{ $key }}]" id="total{{ $key }}" value="{{ $carrito['price'] }}">
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <h4>Total a pagar</h4>

                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="notopborder cart-product-name">
                                        <strong>Subtotal</strong>
                                    </td>

                                    <td class="notopborder cart-product-name">
                                        <span class="amount" id="totalisimo">$106.94</span></strong>
                                        <input type="hidden" id="subtotal" value="">
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Envío</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount">$120</span>
                                        <input type="hidden" id="shipping" value="120">
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead" id="total_total">$106.94</span></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <form action="{{ url('stripe') }}" method="post" enctype="multipart/form-data">
                           @csrf
                            <input type="text" name="subtotal" id="field_subtotal">
                            <input type="text" name="amount" id="field_amount">
                        </form>
                        <a href="{{ url('payment-checkout') }}" class="button button-3d button-small nomargin fright">Pagar</a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    @include('layouts.footer')
<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Inicia Sesión</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ url('login-checkout') }}" method="post" class="form-group" enctype="multipart/form-data" id="loginCheckout">
                        @csrf
                        <div class="form-group">
                            <label for="">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" placeholder="sunombre@gmail.com" >
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="contraseña" >
                            <input type="hidden" name="old_session" value="{{ Session::getId() }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button-3d button-aqua fright" data-dismiss="modal" id="disptachLogin">Entrar</button>

                </div>
            </div>
        </div>
    </div>

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
<script>
    var i = 0;
    var num = 0;
    var suma = parseInt(0);
    var contador = parseInt($('#contador').val(),10);

    for(i;i<contador;i++){
        var valor = parseInt($('#total'+i).val())
        suma = (suma + valor)
    }

    $('#totalisimo').html('$'+suma)
    $('#subtotal').val(suma)
    $('#field_subtotal').val(suma);
</script>

<script>
    var shipping = parseInt($('#shipping').val())
    var subtotal = parseInt($('#subtotal').val())
    var total = (shipping + subtotal)

    $('#total_total').html('$'+total)
</script>
<script>
    $('#palCarro').on('click',() => {
        location.href = "/cart"
    })

    $('#disptachLogin').on('click', () => {
        document.getElementById('loginCheckout').submit();
    })

</script>

</body>
</html>
