<section class="brand-client-area">
    <div class="container">
        <div class="row">
            <!-- BRAND-CLIENT-ROW START -->
            <div class="brand-client-row">
                <div class="center-title-area">
                    <h2 class="center-title">Nhà Cung Cấp</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- CLIENT-CAROUSEL START -->
                        <div class="client-carousel">
                            @foreach($brand as $item)
                            <div class="item">
                                <div class="single-client" >
                                    <a href="{{ route('Shop.category', ['slug' => $item->slug]) }}" >
                                        <img src="{{asset($item->image)}}" alt="brand-client" style="    width: 75px;" />
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- CLIENT-CAROUSEL END -->
                    </div>
                </div>
            </div>
            <!-- BRAND-CLIENT-ROW END -->
        </div>
    </div>
</section>
