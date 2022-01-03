
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
            <h1>Tiendas Lau</h1>
            <span>Donde el glamour empieza con un beso</span>
{{--            <ol class="breadcrumb">--}}
{{--                <li><a href="#">Home</a></li>--}}
{{--                <li class="active">Shop</li>--}}
{{--            </ol>--}}
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="shop product-3 clearfix">
                        @foreach($prod as $product)
                            <div class="product clearfix">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                @foreach($product->imagenes as $imagen)
                                                    <div class="slide"><a href="{{ url('shop',[$product->category,$product->id]) }}"><img src="{{ asset('productos/') }}/{{ $imagen->image }}" alt="Checked Short Dress" style="width: 270px !important; height: 360px !important;"></a></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a href="{{ url('shop',[$product->category,$product->id]) }}" class="add-to-cart"><i class="icon-shopping-cart"></i><span>Ver</span></a>
                                        <a href="{{ url('quick-view',$product->id) }}" class="item-quick-view" data-lightbox="ajax" ><i class="icon-zoom-in2"></i><span> Vista rápida</span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h6><a href="#">{{ $product->name }}</a></h6></div>
                                    <div class="product-price">
                                        @if($product->discount <> 0)
                                            <del>${{ $product->price }}</del>
                                            <ins>${{ $product->discount }}</ins>
                                        @else
                                            <ins>${{ $product->price }}</ins>
                                        @endif
                                    </div>
                                    {{--                                <div class="product-rating">--}}
                                    {{--                                    <i class="icon-star3"></i>--}}
                                    {{--                                    <i class="icon-star3"></i>--}}
                                    {{--                                    <i class="icon-star3"></i>--}}
                                    {{--                                    <i class="icon-star3"></i>--}}
                                    {{--                                    <i class="icon-star-half-full"></i>--}}
                                    {{--                                </div>--}}
                                </div>
                            </div>
                        @endforeach
                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">

                            <h4>Categorias</h4>
                            <ul>
                                @foreach($categories as $cat)
                                    <li><a href="#!">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>

                        </div>

                        @include('layouts.widgets')

                        {{--                        <div class="widget clearfix">--}}

                        {{--                            <h4>Last Viewed Items</h4>--}}
                        {{--                            <div class="widget-last-view">--}}
                        {{--                                <div class="spost clearfix">--}}
                        {{--                                    <div class="entry-image">--}}
                        {{--                                        <a href="#"><img src="images/shop/small/3.jpg" alt="Image"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="entry-c">--}}
                        {{--                                        <div class="entry-title">--}}
                        {{--                                            <h4><a href="#">Round-Neck Tshirt</a></h4>--}}
                        {{--                                        </div>--}}
                        {{--                                        <ul class="entry-meta">--}}
                        {{--                                            <li class="color">$15</li>--}}
                        {{--                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="spost clearfix">--}}
                        {{--                                    <div class="entry-image">--}}
                        {{--                                        <a href="#"><img src="images/shop/small/10.jpg" alt="Image"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="entry-c">--}}
                        {{--                                        <div class="entry-title">--}}
                        {{--                                            <h4><a href="#">Green Trousers</a></h4>--}}
                        {{--                                        </div>--}}
                        {{--                                        <ul class="entry-meta">--}}
                        {{--                                            <li class="color">$19</li>--}}
                        {{--                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="spost clearfix">--}}
                        {{--                                    <div class="entry-image">--}}
                        {{--                                        <a href="#"><img src="images/shop/small/11.jpg" alt="Image"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="entry-c">--}}
                        {{--                                        <div class="entry-title">--}}
                        {{--                                            <h4><a href="#">Silver Chrome Watch</a></h4>--}}
                        {{--                                        </div>--}}
                        {{--                                        <ul class="entry-meta">--}}
                        {{--                                            <li class="color">$34.99</li>--}}
                        {{--                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}

                        {{--                        <div class="widget clearfix">--}}

                        {{--                            <h4>Popular Items</h4>--}}
                        {{--                            <div id="Popular-item">--}}
                        {{--                                <div class="spost clearfix">--}}
                        {{--                                    <div class="entry-image">--}}
                        {{--                                        <a href="#"><img src="images/shop/small/8.jpg" alt="Image"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="entry-c">--}}
                        {{--                                        <div class="entry-title">--}}
                        {{--                                            <h4><a href="#">Pink Printed Dress</a></h4>--}}
                        {{--                                        </div>--}}
                        {{--                                        <ul class="entry-meta">--}}
                        {{--                                            <li class="color">$21</li>--}}
                        {{--                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="spost clearfix">--}}
                        {{--                                    <div class="entry-image">--}}
                        {{--                                        <a href="#"><img src="images/shop/small/5.jpg" alt="Image"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="entry-c">--}}
                        {{--                                        <div class="entry-title">--}}
                        {{--                                            <h4><a href="#">Blue Round-Neck Tshirt</a></h4>--}}
                        {{--                                        </div>--}}
                        {{--                                        <ul class="entry-meta">--}}
                        {{--                                            <li class="color">$19.99</li>--}}
                        {{--                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="spost clearfix">--}}
                        {{--                                    <div class="entry-image">--}}
                        {{--                                        <a href="#"><img src="images/shop/small/12.jpg" alt="Image"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="entry-c">--}}
                        {{--                                        <div class="entry-title">--}}
                        {{--                                            <h4><a href="#">Men Aviator Sunglasses</a></h4>--}}
                        {{--                                        </div>--}}
                        {{--                                        <ul class="entry-meta">--}}
                        {{--                                            <li class="color">$14.99</li>--}}
                        {{--                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}

                        {{--                        <div class="widget subscribe-widget clearfix">--}}

                        {{--                            <h4>Subscribe For Latest Offers</h4>--}}
                        {{--                            <h5>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>--}}
                        {{--                            <form action="#" role="form" class="notopmargin nobottommargin">--}}
                        {{--                                <div class="input-group divcenter">--}}
                        {{--                                    <input type="text" class="form-control" placeholder="Enter your Email" required="">--}}
                        {{--                                    <span class="input-group-btn">--}}
                        {{--											<button class="btn btn-success" type="submit"><i class="icon-email2"></i></button>--}}
                        {{--										</span>--}}
                        {{--                                </div>--}}
                        {{--                            </form>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="widget clearfix">--}}

                        {{--                            <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false">--}}

                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>--}}
                        {{--                                <div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>--}}

                        {{--                            </div>--}}

                        {{--                        </div>--}}

                    </div>
                </div><!-- .sidebar end -->

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
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

</body>
</html>
