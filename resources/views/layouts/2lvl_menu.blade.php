<!-- Header
    ============================================= -->
<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ url('/') }}" class="standard-logo"
                   data-dark-logo="{{ asset('images/LogoTiendasLauMX.png') }}"><img
                        src="{{ asset('images/LogoTiendasLauMX.png') }}" alt="Tienda Lau Logo"></a>
                <a href="{{ url('/') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                        src="{{ asset('images/LogoTiendasLauMX.png') }}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li class="current"><a href="#">
                            <div>Inicio</div>
                        </a>

                    </li>
{{--                    <!-- Mega Menu--}}
{{--                    ============================================= -->--}}
{{--                    <li><a href="#">--}}
{{--                            <div>Joyería</div>--}}
{{--                        </a>--}}
{{--                        <div class="mega-menu-content style-2 clearfix">--}}
{{--                            <ul class="mega-menu-column col-md-6">--}}
{{--                                <li class="mega-menu-title"><a href="#">--}}
{{--                                        <div>Bisuteria</div>--}}
{{--                                    </a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <div>Collares</div>--}}
{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Anillos</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <div>Pulseras</div>--}}
{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Zarcillos</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Tobilleras</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Piercings</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <ul class="mega-menu-column col-md-6">--}}
{{--                                <li class="mega-menu-title"><a href="#">--}}
{{--                                        <div>Plata Ley 925</div>--}}
{{--                                    </a>--}}
{{--                                    <ul>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Collares</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Anillos</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <div>Pulseras</div>--}}
{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Zarcillos</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Tobilleras</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Piercings</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li><!-- .mega-menu end -->--}}
{{--                    <li><a href="#">--}}
{{--                            <div>Ropa</div>--}}
{{--                            <span>Out of the Box</span></a>--}}
{{--                        <div class="mega-menu-content style-2 clearfix">--}}
{{--                            <ul class="mega-menu-column col-md-6">--}}
{{--                                <li class="mega-menu-title"><a href="#">--}}
{{--                                        <div>Salsa Lau</div>--}}
{{--                                    </a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <div>Playeras/Franelas</div>--}}
{{--                                            </a></li>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <div>Chamarras/Sudaderas</div>--}}
{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Gorras</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Viceras</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                        --}}{{--                                        <li><a href="#">--}}
{{--                                        --}}{{--                                                <div>Blusas</div>--}}
{{--                                        --}}{{--                                            </a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            --}}{{--                            <ul class="mega-menu-column col-md-6">--}}
{{--                            --}}{{--                                <li class="mega-menu-title"><a href="#">--}}
{{--                            --}}{{--                                        <div>Ropa</div>--}}
{{--                            --}}{{--                                    </a>--}}
{{--                            --}}{{--                                    <ul>--}}
{{--                            --}}{{--                                        <li><a href="#">--}}
{{--                            --}}{{--                                                <div>Hombres</div>--}}
{{--                            --}}{{--                                            </a></li>--}}
{{--                            --}}{{--                                        <li><a href="#">--}}
{{--                            --}}{{--                                                <div>Mujeres</div>--}}
{{--                            --}}{{--                                            </a></li>--}}
{{--                            --}}{{--                                        <li><a href="#">--}}
{{--                            --}}{{--                                                <div>Jovenes</div>--}}
{{--                            --}}{{--                                            </a></li>--}}
{{--                            --}}{{--                                        <li><a href="#">--}}
{{--                            --}}{{--                                                <div>Niñas</div>--}}
{{--                            --}}{{--                                            </a></li>--}}
{{--                            --}}{{--                                        <li><a href="#">--}}
{{--                            --}}{{--                                                <div>Niños</div>--}}
{{--                            --}}{{--                                            </a></li>--}}
{{--                            --}}{{--                                    </ul>--}}
{{--                            --}}{{--                                </li>--}}
{{--                            --}}{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li><!-- .mega-menu end -->--}}
                    <li><a href="{{ url('main/shop') }}">
                            <div>Tienda</div>
                            <span>Artículos Increibles</span></a></li>
                    <!--
                    <li><a href="#"><div>Sale</div><span>Awesome Works</span></a></li>
                    <li><a href="#"><div>Blog</div><span>Latest News</span></a></li>
                    <li><a href="#"><div>Videos</div><span>Latest News</span></a></li>
                    -->
                    @guest
                        <li><a href="{{ route('login') }}">
                                <div>Ingresa</div>
                                <span>Get In Touch</span></a></li>
                        <li><a href="{{ route('register') }}">
                                <div>Registrate</div>
                                <span>Get In Touch</span></a></li>
                    @else
                        <li><a href="#!">
                                <div>
                                    {{ Auth::user()->name }}
                                </div>
                                <span>Get In Touch</span></a></li>
                    @if(Auth::user()->id == 1)
                            <li><a href="{{ url('admin') }}">
                                    <div>
                                        Admin
                                    </div>
                                    <span>Get In Touch</span></a></li>
                        @endif
                        <li><a href="#!"
                               onclick="event.preventDefault();
                                                document.getElementById('salir').submit();">
                                <div>
                                    Salir
                                </div>
                                <span>Get In Touch</span></a></li>
                        <form method="POST" id="salir" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    @endguest
                </ul>

                <!-- Top Cart
                ============================================= -->
                <div id="top-cart">
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>0</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Carrito de Compra</h4>
                        </div>

                        @if(empty(MyCart::myCart()))
                        @else
                            @foreach(MyCart::myCart() as $carrito)

                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img
                                                    src="{{ asset('productos/thumbnail') }}/{{ $carrito['thumb'] ?? '' }}"
                                                    alt="Blue Round-Neck Tshirt"/></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#"></a>
                                            <span class="top-cart-item-price">${{ $carrito['price'] ?? '' }}</span>
                                            <span class="top-cart-item-quantity">x {{ $carrito['qty'] ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="top-cart-action clearfix">
                            {{--                            <span class="fleft top-checkout-price">$0.00</span>--}}
                            <button class="button button-3d button-small nomargin fright" id="palCarro">Ir al Carrito
                            </button>
                        </div>
                    </div>
                </div><!-- #top-cart end -->

                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value=""
                               placeholder="Escribe lo que deseas comprar...">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
