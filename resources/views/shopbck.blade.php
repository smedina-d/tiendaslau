<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css"/>

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/settings.css') }}" media="screen"/>
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

        .tp-video-play-button {
            display: none !important;
        }

        .tp-caption {
            white-space: nowrap;
        }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

   @include('layouts.Topbar.topbar')

    <section id="slider" class="slider-parallax revslider-wrap ohidden clearfix">

        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000"
                        data-saveperformance="off" data-title="Latest Collections" style="background-color: #F6F6F6;">
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
                             data-endeasing="Power4.easeIn" style=""><img src="images/slider/rev/shop/girl1.jpg"
                                                                          alt="Girl"></div>

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
                             data-endeasing="Power4.easeIn" style=" color: #333;">Get your Shopping Bags Ready
                        </div>

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
                             data-endeasing="Power4.easeIn" style=" color: #333; max-width: 430px; line-height: 1.15;">
                            Latest Fashion<br>Collections
                        </div>

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
                             data-endeasing="Power4.easeIn"
                             style=" color: #333; max-width: 550px; white-space: normal;">We have created a Design that
                            looks Awesome, performs Brilliantly &amp; senses Orientations.
                        </div>

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
                             data-endeasing="Power4.easeIn" style=""><a href="#"
                                                                        class="button button-border button-large button-rounded tright nomargin"><span>Start Shopping</span>
                                <i class="icon-angle-right"></i></a></div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="10000"
                        data-saveperformance="off" data-title="Messenger bags" style="background-color: #E9E8E3;">
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
                             data-endeasing="Power4.easeIn" style=""><img src="images/slider/rev/shop/bag.png"
                                                                          alt="Bag"></div>

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
                             data-endeasing="Power4.easeIn" style=" color: #333;">Buy Stylish Bags at Discounted Prices
                        </div>

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
                             data-endeasing="Power4.easeIn" style=" color: #333; line-height: 1.15;">Messenger Bags
                        </div>

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
                             data-endeasing="Power4.easeIn"
                             style=" color: #333; max-width: 550px; white-space: normal;">Grantees insurmountable
                            challenges invest protect, growth improving quality social entrepreneurship.
                        </div>

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
                             data-endeasing="Power4.easeIn" style=""><a href="#"
                                                                        class="button button-border button-large button-rounded tright nomargin"><span>Start Shopping</span>
                                <i class="icon-angle-right"></i></a></div>

                        <div class="tp-caption customin utb tp-resizeme revo-slider-caps-text uppercase"
                             data-x="510"
                             data-y="0"
                             data-customin="x:0;y:-236;z:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="600"
                             data-start="2100"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style=""><img src="images/slider/rev/shop/tag.png"
                                                                          alt="Bag"></div>

                    </li>
                </ul>
            </div>
        </div>

        <!-- END REVOLUTION SLIDER -->

    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap" style="padding: 0px 0px 0px 0px !important;">

            <div class="container clearfix">

                <div class="tabs topmargin-sm clearfix" id="tab-3">

                    <ul class="tab-nav clearfix">
                        <li><a href="#tabs-9">Más vendidos</a></li>
                        <li><a href="#tabs-10">Nuevo en Salsa</a></li>
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content clearfix" id="tabs-9">

                            <div id="shop" class="shop clearfix">

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                        <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                        <div class="sale-flash">50% Off*</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                        <div class="product-price">
                                            <del>$24.99</del>
                                            <ins>$12.49</ins>
                                        </div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                        <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                        <div class="product-price">$39.99</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <div class="fslider" data-arrows="false">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg"
                                                                                        alt="Dark Brown Boots"></a>
                                                    </div>
                                                    <div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg"
                                                                                        alt="Dark Brown Boots"></a>
                                                    </div>
                                                    <div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg"
                                                                                        alt="Dark Brown Boots"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                        <div class="product-price">$49</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                        <a href="#"><img src="images/shop/dress/2-2.jpg"
                                                         alt="Light Blue Denim Dress"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                        <div class="product-price">$19.95</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tab-content clearfix" id="tabs-10">

                            <div id="shop" class="shop clearfix">

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                        <a href="#"><img src="images/shop/sunglasses/1-1.jpg"
                                                         alt="Unisex Sunglasses"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                        <div class="product-price">
                                            <del>$19.99</del>
                                            <ins>$11.99</ins>
                                        </div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/tshirts/1.jpg"
                                                         alt="Blue Round-Neck Tshirt"></a>
                                        <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                        <div class="product-price">$9.99</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                        <a href="#"><img src="images/shop/watches/1-1.jpg"
                                                         alt="Silver Chrome Watch"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                        <div class="product-price">$129.99</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="product clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                        <a href="#"><img src="images/shop/shoes/2-1.jpg"
                                                         alt="Men Grey Casual Shoes"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view"
                                               data-lightbox="ajax"><i
                                                    class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                        <div class="product-price">
                                            <del>$45.99</del>
                                            <ins>$39.49</ins>
                                        </div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="clear bottommargin-sm"></div>

                <div class="col_one_third">
                    <div class="fancy-title title-border">
                        <h4>Nosotros</h4>
                    </div>
                    <p>En Tienda Lau nos esforzamos por entregar prendas de calidad y certificadas, con diseños únicos
                     e inigualables. Nuestra sección <strong>Salsa Lau</strong> encontrarás diseños personalizados de tus cantantes favoritos de este
                    ritmo único.</p>
                </div>

                <div class="col_one_third subscribe-widget">
                    <div class="fancy-title title-border">
                        <h4>Suscribete</h4>
                    </div>
                    <p>Ssuscribete a nuestro boletin semanal por WhatsApp donde te enviaremos un link para acceso a nuestras ofertas de la semana.</p>
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post"
                          class="nobottommargin">
                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                            <input type="email" name="widget-subscribe-form-email" class="form-control required email"
                                   placeholder="00521234567">
                            <span class="input-group-btn">
									<button class="btn btn-default" type="submit">Suscribete</button>
								</span>
                        </div>
                    </form>
                </div>

                <div class="col_one_third col_last">
                    <div class="fancy-title title-border">
                        <h4>Conectate con nosotros</h4>
                    </div>

                    <a href="#" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top"
                       title="Facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-instagram" data-toggle="tooltip" data-placement="top"
                       title="Instagram">
                        <i class="icon-instagram2"></i>
                        <i class="icon-instagram2"></i>
                    </a>

                    <a href="#" class="social-icon si-googleplay" data-toggle="tooltip" data-placement="top"
                       title=" Descarga nuestra App">
                        <i class="icon-googleplay"></i>
                        <i class="icon-googleplay"></i>
                    </a>
                    <!--
                    <a href="#" class="social-icon si-appstore" data-toggle="tooltip" data-placement="top" title="App Store">
                        <i class="icon-appstore"></i>
                        <i class="icon-appstore"></i>
                    </a>
                    -->
                    <a href="#" class="social-icon si-email3" data-toggle="tooltip" data-placement="top"
                       title="Correo Electrónico">
                        <i class="icon-email3"></i>
                        <i class="icon-email3"></i>
                    </a>
                </div>

                <div class="clear"></div>

                <div class="fancy-title title-border title-center topmargin-sm">
                    <h4>Popular Brands</h4>
                </div>

                <ul class="clients-grid grid-6 nobottommargin clearfix">
                    @foreach($brands as $brand)
                    <li><a href="#"><img src="{{ asset('images/clients/logo/') }}/{{ $brand->image }}" alt="{{ $brand->name }}"></a></li>
                    @endforeach
                </ul>

            </div>

            <div class="section nobottommargin">
                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-thumbs-up2"></i>
                            </div>
                            <h3>100% Originales</h3>
                            <p class="notopmargin">Garantizamos marcas originales.</p>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-credit-cards"></i>
                            </div>
                            <h3>Métodos de pago</h3>
                            <p class="notopmargin">Aceptamos Visa o MasterCard (Débito ó Crédito), Paypal, SPEI.</p>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-truck2"></i>
                            </div>
                            <h3>Envíos</h3>
                            <p class="notopmargin">Envios seguros y rastreables.</p>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin col_last">
                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-undo"></i>
                            </div>
                            <h3>Devoluciones</h3>
                            <p class="notopmargin">Devoluciones o cambios garantizados.</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/lauLogo.png" alt="" class="footer-logo">

                            <p>Nosotros creemos en lo <strong>Simple</strong>, <strong>Creativo</strong> &amp;
                                <strong>Flexible de nuestros productos</strong></p>

                            <div
                                style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Dirección:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Teléf:</strong></abbr> (52) 722 173 0403<br>
                                <abbr title="Email Address"><strong>Correo:</strong></abbr> laurecastillo26@gmail.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Menú</h4>

                            <ul>
                                <li><a href="http://codex.wordpress.org/">Inicio</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Joyeria</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Ropa</a></li>
                                <li><a href="http://wordpress.org/support/">Personalizalo</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Contactanos</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Publicaciones Recientes</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Collar de plata 925, bullshelter</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>16 Oct 2021</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="3256"
                                                                         data-refresh-interval="80" data-speed="3000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total de Compras</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="268"
                                                                         data-refresh-interval="50" data-speed="2000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Descarga de App</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Susscribete</strong> a nuestra oertas, te llegara un mensaje de WhatsApp Semanal con un link personalizado:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post"
                              class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                                       class="form-control required email" placeholder="00584123165987">
                                <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Suscribete</button>
									</span>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                        Facebook</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Derechos de Autor &copy; 2021 <br>
                    <div class="copyright-links"><a href="#">Terminos y Condiciones</a> / <a href="#">Política de Privacidad</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> laurecastillo26@gmail.com <span class="middot">&middot;</span> <i
                        class="icon-headphones"></i> +52 1 722173 0403<span class="middot">&middot;</span>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

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

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script type="text/javascript">

    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function () {

        var apiRevoSlider = tpj('.tp-banner').show().revolution(
            {
                sliderType: "standard",
                jsFileLocation: "public/include/rs-plugin/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1200, 992, 768, 480, 320],
                gridwidth: 1140,
                gridheight: 500,
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                },
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
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
                        tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder">Titulo</span> </div>',
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

        apiRevoSlider.bind("revolution.slide.onloaded", function (e) {
            SEMICOLON.slider.sliderParallaxDimensions();
        });

    }); //ready

</script>

</body>
</html>
