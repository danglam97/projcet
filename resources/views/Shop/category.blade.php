@extends('Shop.layouts.main')
@section('content')
    <style>

        .filter_button {
            width: 100%;
            height: 30px;
            background: green;
            text-align: center;
            margin-top: 25px;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }


        .filter_button span {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 30px;
            color: #FFFFFF;

        }
        .rating .active {
            color: #fd9727 !important;
        }
    </style>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang Chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>{{$category->name}}</span>
                    </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                    <div class="product-left-sidebar">
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Giá</span>
                            <ul>
                                <li>
                                    <label><strong>Range:</strong><input type="text" id="slidevalue" /></label>
                                </li>
                                <li>
                                    <div id="price-range"></div>
                                </li>
                                <li style="margin: 5px;">
                                    <button type="submit" class="filter_button" style=""><span>submit</span></button>
                                </li>
                            </ul>
                        </div>
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Thương hiệu</span>

                            <ul class="product-color-var">
                                @foreach($data as $item)
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="compositions"/>
                                        <span></span>
                                    </label>
                                    <a href="#">{{$item->name}}</a>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="right-all-product">

                    <!-- ALL GATEGORY-PRODUCT START -->
                    <div class="all-gategory-product">
                        <div class="row" style=" margin: 16px;    width: 93%;">
                            @foreach($products as $item)

                                <?php
                                $age = 0;
                                if ($item->total_rating){
                                    $age = $item->total_number / $item->total_rating;

                                }
                                ?>
                            <ul class="gategory-product">
                                <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="{{ route('Shop.detail-product', ['slug' =>$item->slug,'id' =>$item->id,]) }}"><img src="{{asset($item->image)}}" alt="product-image"></a>
                                            @if($item->sale!=0)
                                                <a href="#" class="new-mark-box">sale</a>
                                            @endif

                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating" style=" align-items: center; margin-left: 25px;">
                                                    @for($i=1; $i<=5 ; $i++)
                                                        <i class="fa fa-star {{$i <= $age ? 'active': ''}}"></i>
                                                    @endfor
                                                </div>

                                            </div>
                                            <a href="{{ route('Shop.detail-product', ['slug' =>$item->slug,'id' =>$item->id,]) }}" style="    text-align: center">{{$item->name}}</a>
                                            <div class="price-box" style="text-align: center;    margin-left: 25px;">
                                                @if($item->sale==0)
                                                    <span class="price">{{number_format($item->price)}} <sup>đ</sup> </span>
                                                @else
                                                    <span class="price" style="color: red; ">{{number_format($item->sale)}} <sup>đ</sup></span>
                                                    &nbsp;
                                                    <span class="old-price">{{number_format($item->price)}}<sup>đ</sup></span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                {{ $products->links() }}
                            </ul>
                    </div>

                </div>
            </div>
        </div>

            </div>

@endsection
