<div class="single-product shop-quick-view-ajax clearfix">

    <div class="ajax-modal-title">
        <h2>{{ $prod->name ?? 'No Name'}}</h2>
    </div>

    <div class="product modal-padding clearfix">

        <div class="col_half nobottommargin">
            <div class="product-image">
                <div class="fslider" data-pagi="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            @foreach($prod->imagenes as $iamgen)
                            <div class="slide"><a href="#!" title="Pink Printed Dress - Front View">
                                    <img src="{{ asset('productos/') }}/{{ $iamgen->image }}" alt="{{ $prod->name ?? '' }}"></a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if($prod->discount <> 0)
                    <div class="sale-flash">Sale!</div>
                @endif
            </div>
        </div>
        <div class="col_half nobottommargin col_last product-desc">
            <div class="product-price">
                @if($prod->discount <> 0)
                    <del>${{ $prod->price }}</del>
                    <ins>${{ $prod->discount }}</ins>
                @else
                    <ins>${{ $prod->price }}</ins>
                @endif
            </div>
            <div class="product-rating">
                <i class="icon-star3"></i>
                <i class="icon-star3"></i>
                <i class="icon-star3"></i>
                <i class="icon-star-half-full"></i>
                <i class="icon-star-empty"></i>
            </div>
            <div class="clear"></div>
            <div class="line"></div>

            <!-- Product Single - Quantity & Cart Button
            ============================================= -->

                <div class="quantity clearfix">
                    <input type="button" value="-" class="minus" onclick="$('.qty').val(Number( $('.qty').val() ) - 1).change()">
                    <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4"/>
                    <input type="button" value="+" class="plus" onclick="$('.qty').val(Number( $('.qty').val() ) + 1).change()">
                </div>
                <button class="add-to-cart button nomargin" onclick="addToCart()">Agregar</button>


            <div class="clear"></div>
            <div class="line"></div>
            <p>{{ $prod->description }}</p>
{{--            <ul class="iconlist">--}}
{{--                <li><i class="icon-caret-right"></i> Dynamic Color Options</li>--}}
{{--                <li><i class="icon-caret-right"></i> Lots of Size Options</li>--}}
{{--                <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>--}}
{{--            </ul>--}}
            <div class="panel panel-default product-meta nobottommargin">
                <div class="panel-body">
                    <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">{{ $prod->sku }}</span></span>
                    <span class="posted_in">Category: <a href="#!" rel="tag">{{ $prod->categoria->name }}</a>.</span>
                </div>
            </div>
        </div>

    </div>

</div>
<script>
    function addToCart() {
        let qty = $('.qty').val()
        let session = $('#session_id').val()
        let is_user = $('#is_user').val()
        let user_id = $('#user_id').val()
        let product_id = '{{ $prod->id }}'
        let unit_price = '{{ $prod->price }}'
        let prod_total = (qty * unit_price)
        var tok = '{{ csrf_token() }}'
        $.ajax({
            method: 'post',
            data: {
                '_token': tok,
                'is_user': is_user,
                'session_id': session,
                'user_id': user_id,
                'product_id': product_id,
                'unit_price': unit_price,
                'quantity': qty,
                'prod_total': prod_total
            },
            url: '/save/cart',
            success: (response) => {
                console.log(response);
            }
        });
    }


</script>
