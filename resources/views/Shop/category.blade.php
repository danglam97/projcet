@extends('Shop.layouts.main')
@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang Chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>{{$category->name}}</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="right-all-product">


                        <div class="product-shooting-area  ">
                            <div class="product-shooting-bar " style="border: none">
                                <!-- SHOORT-BY START -->
                                <div class="  pull-right">
                                    <label for="productShort  ">Tìm kiếm </label>
                                    <div class="short-select-option">
                                        <select name="sortby" id="productShort">
                                            <option value="">--</option>
                                            <option value="">Dưới 2 Triệu</option>
                                            <option value="">Từ 2 - 4 Triệu</option>
                                            <option value="">Từ 4 - 7 Triệu</option>
                                            <option value="">Từ 4 - 13 Triệu</option>
                                            <option value="">Trên 13 Triệu</option>
                                            <option value="">Tên: A to Z</option>
                                            <option value="">Tên: Z to A</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- SHOORT-BY END -->

                            </div>
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT START -->
                    <div class="all-gategory-product">
                        <div class="row">
                            @foreach($products as $item)
                            <ul class="gategory-product">
                                <li class="col-lg-3 col-md-4 col-sm-9 col-xs-12" >
                                    <div class="single-product-item">
                                        <div class="product-image" >
                                            <a href="{{route('Shop.detail-product',['slug' => $item->slug, 'id'=>$item->id])}}" title="{{ $item->name }}" ><img src="{{asset($item->image)}}" style="width: 100% "></a>
                                            @if($item->sale!=0)
                                                <a href="#" class="new-mark-box">sale</a>
                                            @endif
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">

                                            </div>
                                            <a href="{{route('Shop.detail-product',['slug' => $item->slug, 'id'=>$item->id])}}" title="{{$item->name}}">{{$item->name}}</a>
                                            <div class="price-box">
                                                @if($item->sale==0)
                                                    <span class="price">{{number_format($item->price)}} <sup>đ</sup> </span>
                                                @else
                                                    <span class="price">{{number_format($item->sale)}} <sup>đ</sup> </span>
                                                    <span class="old-price">{{number_format($item->price)}} <sup>đ</sup> </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT END -->
                    <!-- PRODUCT-SHOOTING-RESULT START -->
                        <div class="">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                {{ $products->links() }}
                            </ul>
                    </div>
                    <!-- PRODUCT-SHOOTING-RESULT END -->
                </div>
            </div>


    </section>
@endsection
