<div class="header-top">
    <div class="container-fluid" style="background: #0a0a0a">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-right-menu">
                    <nav>
                        <ul class="list-inline" style="margin-right: 85px;">
                            <li><a href="checkout.html">Liên hệ</a></li>
                            <li><a href="wishlist.html">Đăng Ký</a></li>
                            <li><a href="my-account.html">Đăng Nhập</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- HEADER-RIGHT-MENU END -->
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- LOGO START -->
                <div class="logo">
                    <a href="/"><img src="{{asset($setting->image)}}" alt="bstore logo" style="width: 190px;" /></a>
                </div>
                <div class="categorys-product-search col-sm-12">
                    <form action="{{route('Shop.search')}}" method="get" class="search-form-cat" style="width: 400px;border-radius: 10px">
                        <div class="search-product form-group">
                            <input type="text" class="form-control search-form" value="{{ isset($keyword) ? $keyword : '' }}" name="tu-khoa" placeholder="Tìm kiếm" />
                            <button class="search-button" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- CATEGORYS-PRODUCT-SEARCH END -->
            </div>
        </div>
    </div>
</section>
<header class="main-menu-area">
    <div class="container">
        <div class="row">
            <!-- SHOPPING-CART START -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
                <div class="shopping-cart-out pull-right">
                    <div class="shopping-cart">
                        <a class="shop-link" href="{{route('shop.cart')}}" title="View my shopping cart">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                            <b>Giỏ Hàng</b>
                            @if(session('cart'))
                            <span class="ajax-cart-quantity" id="slgiohang"> {{session('cart')->totalQty }}</span>
                            @else
                                <span class="ajax-cart-quantity"></span>
                            @endif
                        </a>
{{--                        <div class="shipping-cart-overly">--}}
{{--                            @foreach(session('cart') as $item)--}}
{{--                            <div class="shipping-item">--}}
{{--                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>--}}
{{--                                <div class="shipping-item-image">--}}
{{--                                    <a href="#"><img src="/home/img/shopping-image2.jpg" alt="shopping image"></a>--}}
{{--                                </div>--}}
{{--                                <div class="shipping-item-text">--}}
{{--                                    <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>--}}
{{--                                    <span class="pro-quality"><a href="#">S,Gary</a></span>--}}
{{--                                    <p>$19.95</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                            <div class="shipping-total-bill">--}}
{{--                                <div class="total-shipping-prices">--}}
{{--                                    <span class="shipping-total">$24.95</span>--}}
{{--                                    <span>Tổng Tiền</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="shipping-checkout-btn">--}}
{{--                                <a href="{{route('shop.cart')}}">Thanh Toán <i class="fa fa-chevron-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- SHOPPING-CART END -->
            <!-- MAINMENU START -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                <div class="mainmenu">
                    <nav>
                        <ul class="list-inline mega-menu">
                            <li class="active">
                                <a href="/">Trang Chủ</a>
                            </li>
                            @foreach($categories  as $category)
                                @if($category->parent_id == 0)
                            <li>
                                <a href="{{ route('Shop.category', ['slug' => $category->slug]) }}" >{{ $category->name }}</a>

                                <div class="drodown-mega-menu">
                                    @foreach($categories as $child)
                                        @if($child->parent_id == $category->id)
                                    <div class="left-mega col-xs-6">

                                        <div class="mega-menu-list">
                                                    <a href="{{ route('Shop.category',['slug' => $child->slug]) }}" style="text-align: center">{{ $child->name }}</a>
                                        </div>
                                    </div>
                                        @endif
                                    @endforeach
                                </div>

                            </li>
                                @endif
                            @endforeach
                            <li><a href="{{route('Shop.article')}}">Tin Tức</a></li>
                            <li><a href="{{route('Shop.contact')}}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
