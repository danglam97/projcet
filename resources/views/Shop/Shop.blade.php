@extends('Shop.layouts.main')
@section('content')
    <style>
        .rating .active {
            color: #fd9727 !important;
        }
    </style>
    @foreach($list as  $item)
    <div class="row tow-column-product">
    <div class="row">
        <div class="featured-products-area ">
            <div class="center-title-area">
                <h2 class="center-title ">{{$item['category']->name}}</h2>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="feartured-carousel">
                        @foreach($item['products'] as $product)
                            <?php
                            $age = 0;
                            if ($product->total_rating){
                                $age = $product->total_number / $product->total_rating;

                            }
                            ?>
                        <div class="item">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="{{route('Shop.detail-product',['slug' => $product->slug, 'id'=>$product->id])}}" title="{{$product->name}}"><img src="{{asset($product->image)}}" alt="product-image" /></a>
                                    @if($product->sale!=0)
                                    <a href="#" class="new-mark-box" >sale</a>
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
                                    <a href="{{route('Shop.detail-product',['slug' => $product->slug, 'id'=>$product->id])}}" title="{{$product->name}}">{{$product->name}}</a>
                                    <div class="price-box">
                                        @if($product->sale==0)
                                            <span class="price">{{number_format($product->price)}} <sup>đ</sup> </span>
                                        @else
                                            <span class="price">{{number_format($product->sale)}} <sup>đ</sup> </span>
                                            <span class="old-price">{{number_format($product->price)}} <sup>đ</sup> </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
