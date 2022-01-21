
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
            <h1>Carrito de compras</h1>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="table-responsive bottommargin">

                    <table class="table cart">
                        <thead>
                        <tr>
                            <th class="cart-product-remove">&nbsp;</th>
                            <th class="cart-product-thumbnail">&nbsp;</th>
                            <th class="cart-product-name">Producto</th>
                            <th class="cart-product-price">Precio unitario</th>
                            <th class="cart-product-quantity">Cantidad</th>
                            <th class="cart-product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" id="contador" value="{{ sizeof(MyCart::myCart()) }}">
                        @foreach(MyCart::myCart() as $key => $carrito)
                        <tr class="cart_item">
                            <td class="cart-product-remove">
                                <a href="{{ url('remove/item',$carrito['cart_id']) }}" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                            </td>

                            <td class="cart-product-thumbnail">
                                <a href="#"><img width="64" height="64" src="{{ asset('productos/thumbnail') }}/{{ $carrito['thumb'] }}" alt="Pink Printed Dress"></a>
                            </td>

                            <td class="cart-product-name">
                                <a href="#">{{ $carrito['name'] }}</a>
                            </td>

                            <td class="cart-product-price">
                                <span class="amount">${{ $carrito['unit_price'] }}</span>
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

                <div class="row clearfix">
                    <div class="col-md-6 clearfix">
                        <h4>Calcular envio Shipping</h4>
                        <form>
{{--                            <div class="col_full">--}}
{{--                                <select class="sm-form-control">--}}
{{--                                    <option value="MX">Mexico</option>--}}
{{--                                    <option value="AW">Aruba</option>--}}
{{--                                    <option value="BT">Bhutan</option>--}}
{{--                                    <option value="BO">Bolivia</option>--}}
{{--                                    <option value="BR">Brazil</option>--}}
{{--                                    <option value="CL">Chile</option>--}}
{{--                                    <option value="CN">China</option>--}}
{{--                                    <option value="CO">Colombia</option>--}}
{{--                                    <option value="CR">Costa Rica</option>--}}
{{--                                    <option value="EC">Ecuador</option>--}}
{{--                                    <option value="VE">Venezuela</option>--}}

{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="col_half">
                                <input type="text" class="sm-form-control" placeholder="Código postal destino" />
                            </div>

                            <a href="#" class="button button-3d nomargin button-black" onclick="calculateshipping()">Calcular</a>

                        </form>
                    </div>

                    <div class="col-md-6 clearfix">
                        <div class="table-responsive">
                            <h4>Cart Totals</h4>

                            <table class="table cart">
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Subtotal</strong>
                                    </td>

                                    <td class="cart-product-name"><strong>
                                        <span class="amount" id="totalisimo">$106.94</span></strong>
                                        <input type="hidden" id="subtotal" value="">
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Cargo por envio</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="shippingprice" id="shippingprice">$0</span>
                                        <input type="hidden" id="shipping" value="0">
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name"><strong>
                                        <span class="amount color lead" id="total_total">$106.94</span></strong>
                                    </td>
                                </tr>
                                </tbody>

                            </table>

                        </div>
                        <a href="{{ url('checkout',Session::getId()) }}" class="button button-3d nomargin button-green">Continuar con la compra</a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- #content end -->

        @include('layouts.footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

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
</script>

<script>
    var shipping = parseInt($('#shipping').val())
    var subtotal = parseInt($('#subtotal').val())
    var total = (shipping + subtotal)

    $('#total_total').html('$'+total)
</script>
<script>
    function calculateshipping() {
        $('#shippingprice').html('$150');
        $('#shipping').val(150);
        var shipping = parseInt($('#shipping').val())
        var subtotal = parseInt($('#subtotal').val())
        var total = (shipping + subtotal)

        $('#total_total').html('$'+total)
    }
</script>
</body>
</html>
