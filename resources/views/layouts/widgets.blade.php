<div class="widget clearfix">

    <h4>Ventas recientes</h4>
    <div id="post-list-footer">
        @if(empty(Recent::recentSale()))
        @else
            @foreach(Recent::recentSale() as $reciente)
                <div class="spost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{ asset('productos/thumbnail') }}/{{ $reciente['thumb1'] }}" alt="Image"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">{{ $reciente['name'] }}</a></h4>
                        </div>
                        <ul class="entry-meta">
                            <li class="color">${{ $reciente['price'] }}</li>
                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i
                                    class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                        </ul>
                    </div>
                </div>
            @endforeach
            @endif
    </div>

</div>
