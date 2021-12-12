
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Janus DEV SAS de CV" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/navigation.css') }}">
    <!-- Document Title
    ============================================= -->
    <title>Inicio | Tiendas Lau</title>
    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }

        .tp-video-play-button { display: none !important; }

        .tp-caption { white-space: nowrap; }

    </style>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

@include('layouts.2lvl_menu')

    <!-- Page Title
    ============================================= -->
    <section id="slider" class="slider-parallax revslider-wrap ohidden clearfix">

        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Latest Collections" style="background-color: #F6F6F6;">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                             data-x="100"
                             data-y="50"
                             data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=""><img src="{{ asset('images/slider/rev/shop/girl1.jpg') }}" alt="Girl"></div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                             data-x="570"
                             data-y="75"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333;">Ten tu bolsa de compras lista</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                             data-x="570"
                             data-y="105"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333; max-width: 430px; line-height: 1.15;">Colección única en <br>Joyeria fina</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                             data-x="570"
                             data-y="275"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">Tenemos para ti, la última tendencia 2021 en bisuteria, joyeria fina y joyas de plata ley 925.</div>

                        <div class="tp-caption customin ltl tp-resizeme"
                             data-x="570"
                             data-y="375"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=""><a href="{{ url('main/shop') }}" class="button button-border button-large button-rounded tright nomargin"><span>Ir a la tienda</span> <i class="icon-angle-right"></i></a></div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="10000"  data-saveperformance="off"  data-title="Messenger bags" style="background-color: #E9E8E3;">
                        <!-- LAYERS -->

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                             data-x="630"
                             data-y="78"
                             data-customin="x:250;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=""><img src="{{ asset('images/shop/imagenesProductos.png') }}" alt="Bag"></div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                             data-x="0"
                             data-y="110"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333;">Muy pronto tendrás a tu disposición la colección</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                             data-x="0"
                             data-y="140"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333; line-height: 1.15;">Salsera de Tiendas Lau</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                             data-x="0"
                             data-y="240"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">Podrá adquirir sudaderas, franelas chamarras y sweaters con
                        la imagen, los dialogos o diseños personalizables de tus cantantes favoritos</div>

                        <div class="tp-caption customin ltl tp-resizeme"
                             data-x="0"
                             data-y="340"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="700"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=""><a href="{{ url('main/shop') }}" class="button button-border button-large button-rounded tright nomargin"><span>Start Shopping</span> <i class="icon-angle-right"></i></a></div>

{{--                        <div class="tp-caption customin utb tp-resizeme revo-slider-caps-text uppercase"--}}
{{--                             data-x="510"--}}
{{--                             data-y="0"--}}
{{--                             data-customin="x:0;y:-236;z:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"--}}
{{--                             data-speed="600"--}}
{{--                             data-start="2100"--}}
{{--                             data-easing="easeOutQuad"--}}
{{--                             data-splitin="none"--}}
{{--                             data-splitout="none"--}}
{{--                             data-elementdelay="0.01"--}}
{{--                             data-endelementdelay="0.1"--}}
{{--                             data-endspeed="1000"--}}
{{--                             data-endeasing="Power4.easeIn" style=""><img src="images/slider/rev/shop/tag.png" alt="Bag"></div>--}}

                    </li>
                </ul>
            </div>
        </div>

        <!-- END REVOLUTION SLIDER -->

    </section>

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
                                <div class="product-title"><h3><a href="#">{{ $product->name }}</a></h3></div>
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

<script>
    function executePreview() {
        e.preventDefault()
        document.getElementById('preview').submit();
    }
</script>
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script type="text/javascript">

    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        var apiRevoSlider = tpj('.tp-banner').show().revolution(
            {
                sliderType:"standard",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {},
                responsiveLevels:[1200,992,768,480,320],
                gridwidth:1140,
                gridheight:500,
                lazyType:"none",
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                },
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder">Siguiente</span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });

        apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
            SEMICOLON.slider.sliderParallaxDimensions();
        });

    }); //ready

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
