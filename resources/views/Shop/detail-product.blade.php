@extends('Shop.layouts.main')
@section('content')
    <style>
        .list_start i:hover{
        cursor: pointer;

        }
        .list_text{
            display: inline-block;
            margin-left: 10px;
            position: relative;
            background: #52b858;
            color: #fff;
            padding: 2px 8px;
            box-sizing: border-box;
            font-size: 12px;
            border-radius: 2px;
            display: none;
        }
        .list_text:after{
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(82,184,88,0);
            border-right-color: #52b858;
            border-width: 6px;
            margin-top: -6px;
        }
        .list_start .ad{
            color: #fd9727;
        }
        .single-product-condition .active{
            color: #fd9727 !important;
        }
    </style>
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang Chủ<span><i class="fa fa-caret-right"></i> </span> </a>
                        <span> <i class="fa fa-caret-right"> </i> </span>
                        <a href="{{ route('Shop.category', ['slug' => $category->slug]) }}"> {{$category->name}} </a>
                        <span> {{$product->name}} </span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                            <div class="single-product-view">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="thumbnail_1">
                                        <div class="single-product-image">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                                            @if($product->sale!=0)
                                                <a href="#" class="new-mark-box">sale</a>
                                            @endif
                                            <a class="fancybox" href="{{ asset($product->image) }}" data-fancybox-group="gallery"><span class="btn large-btn"> phong to <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
                        $age = 0;
                        if ($product->total_rating){
                            $age = $product->total_number / $product->total_rating;

                        }
                        ?>
                        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                            <div class="single-product-descirption">
                                <h2>{{ $product->name }}</h2>
                                <div class="single-product-condition">
                                    @for($i=1; $i<=5; $i++)
                                         <i class="fa fa-star {{$i <= $age ? 'active': ''}}"></i>
                                    @endfor
{{--                                    <p>số lượng: <span>{{ $product->stock }}</span></p>--}}
{{--                                    <p>Tình Trạng: <span>{{ ($product->stock >0) ? 'Còn Hàng' : 'Hết Hàng' }}</span></p>--}}
                                </div>
                                <div class="single-product-price" style="font-size: 15px">
                                    @if($product->sale==0)
                                        <span class="price">{{number_format($product->price)}} <sup>đ</sup> </span>
                                    @else
                                        <span class="price" style="color: red; ">{{number_format($product->sale)}} <sup>đ</sup> </span>
                                        &nbsp;
                                        <span class="old-price">{{number_format($product->price)}} <sup>đ</sup> </span>
                                    @endif
                                </div>

                                <div class="single-product-quantity">
                                    <p class="small-title">Số Lượng</p>
                                    <div class="">
                                        <div class="">
                                            <input type="hidden" id="idProduct" value="{{$product->id}}">
                                            <input class="cart-plus-minus sing-pro-qty" style="border-radius: 5px;" type="number" name="qtybutton" id="slsp" value="1" min="1">

                                        </div>
                                    </div>
                                </div>


                                <div class="single-product-color" style=" margin-top: 15px;">
                                    <div class="fb-like" data-href="http://viettelstore.com/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
                                </div>
                                <div class="single-product-add-cart" >
                                    <div class="ha hidden" style="background: red"></div>
                                    <a  type="button" class="add-cart-text" title="Giỏ Hàng" style="border-radius: 10px" onclick="addToCart()"> <i class="fa fa-cart-plus" aria-hidden="true"></i >  &nbsp;Giỏ Hàng </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE-PRODUCT-DESCRIPTION END -->
                    <!-- SINGLE-PRODUCT INFO TAB START -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product-more-info-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs more-info-tab" style="    margin-top: 15px;">
                                    <li class="active"><a href="#moreinfo" data-toggle="tab">Mô Tả</a></li>
                                    <li><a href="#datasheet" data-toggle="tab">Chi tiết</a></li>
                                    <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="moreinfo">
                                        <div class="tab-description">
                                            {!! $product->summary !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="datasheet">
                                        <div class="deta-sheet">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="review">
                                        <div class="row tab-review-row" style="align-items: center">
                                            <div class=" col-lg-3 padding-5">

                                                    <div class="rating_item" style="margin-top: 30px;position: relative">

                                                        <span class="fa fa-star" style="font-size: 100px;color: #fd9727;line-height: 40px; "></span>
                                                        <b style="position: absolute;top: 50%;left: 50%;transform: translateX(-276%)translateY(-100%); color: white;font-size: 14px; "> 2.5</b>
                                                    </div>
                                            </div>
                                            <div class="col-lg-7 padding-3 list_rating" style="margin-right: -97px;">
                                                @for($i=1; $i<=5 ; $i++)
                                                <div class="rating_item" style="display: flex;">

                                                    <div >
                                                       {{$i}} <i class="fa fa-star"></i>
                                                    </div>
                                                    <div>
                                                        <span style="width: 200px; height:6px;display:block;border:1px solid; margin-top: 8px; margin-left: 5px; margin-right:5px; border-radius: 5px;background: #fd9727; "><b></b></span>
                                                    </div>
                                                    <div >
                                                        @if($i==1)
                                                        <span>{{$rate_1}} đánh giá</span>
                                                        @elseif($i==2)
                                                            <span>{{$rate_2}} đánh giá</span>
                                                        @elseif($i==3)
                                                            <span>{{$rate_3}} đánh giá</span>
                                                        @elseif($i==4)
                                                            <span>{{$rate_4}} đánh giá</span>
                                                        @else
                                                                <span>{{$rate_5}} đánh giá</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                @endfor

                                            </div>

                                            <div class=" col-lg-2 padding-5">
                                                <div class="" style="display: block; width: 200px; margin: 41px auto 0;padding: 10px; background: #288ad6;border-radius: 5px; text-align: center;box-sizing: border-box">
                                                    <a href="" class="js_rating" style="color: white"  >Gửi đánh giá của bạn</a>
                                                </div>
                                            </div>
                                        </div>

                                        <form class="form_rating hidden" name="fRatingComment">
                                            <div style="display: flex; margin-top: 15px;" >
                                                <p style="margin-top: 1px; margin-bottom: 0;" >chọn đánh giá của bạn</p>
                                                <span style="margin: 0 15px;font-size: 16px;" class="list_start">
                                            @for($i=1; $i<=5; $i++)
                                                        <i class="fa fa-star "  data-key="{{$i}}"></i>
                                                    @endfor
                                            </span>
                                                <span class="list_text"></span>
                                                <input type="hidden" value="" class="number_rating">
                                            </div>
                                            <div class="ipt">
                                                <div class="ct" style="font-size: 14px; color: #999; padding: 5px; margin: 5px 0;   width: 100%; height: 78px; resize: none; border: none; box-sizing: border-box;">
                                                    <textarea name="content" id="conntent" placeholder="Nhập đánh giá về sản phẩm (tối thiểu 80 ký tự)" class="form-control"></textarea>
                                                </div>
                                                <div style="display: flex;margin-bottom: 5px;">
                                                    <input type="text" class="form-control name" name="name" placeholder="Họ tên" style="margin-right: 5px">
                                                    <input type="text" class="form-control phone" name="phone" placeholder="Số điện thoại" style="margin-right: 5px">
                                                    <input type="text" class="form-control email" name="email" placeholder="Email" style="margin-right: 5px">
                                                    <a href="{{route('shop.rating.product',$product)}}" class=" btn btn-primary js_rating_product " style="text-align: center">GỬI ĐÁNH GIÁ</a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-PRODUCT INFO TAB END -->
                    <!-- RELATED-PRODUCTS-AREA START -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="left-title-area">
                                <h2 class="left-title">Sản Phẩm Liên quan</h2>
                            </div>
                        </div>
                        <div class="related-product-area featured-products-area">
                            <div class="col-sm-12">
                                <div class=" row">
                                    <!-- RELATED-CAROUSEL START -->
                                    <div class="related-product">
                                        @foreach($relatedProducts as $item)
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="{{route('Shop.detail-product',['slug' => $item->slug, 'id'=>$item->id])}}" title="{{$item->name}}"><img src="{{ asset($item->image) }}" alt="{{ $item->name }}" /></a>
                                                    @if($product->sale!=0)
                                                        <a href="#" class="new-mark-box">sale</a>
                                                    @endif
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">

                                                        <div class="review-box">

                                                        </div>
                                                    </div>
                                                    <a href="{{route('Shop.detail-product',['slug' => $item->slug, 'id'=>$item->id])}}">{{ $product->name }}</a>
                                                    <div class="price-box">
                                                        @if($product->sale==0)
                                                            <span class="price">{{number_format($item->price)}} <sup>đ</sup> </span>
                                                        @else
                                                            <span class="price" style="color: red; ">{{number_format($item->sale)}} <sup>đ</sup></span>
                                                            &nbsp;
                                                            <span class="old-price">{{number_format($item->price)}}<sup>đ</sup></span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    </div>
                                    <!-- RELATED-CAROUSEL END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RELATED-PRODUCTS-AREA END -->
                </div>
                <!-- RIGHT SIDE BAR START -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar">
                        <h2 class="left-title">Sản Phẩm View</h2>

                        <ul>
                            @foreach($views as $item)
                            <li >
                                <a href="{{route('Shop.detail-product',['slug' => $item->slug, 'id'=>$item->id])}}"><img src="{{asset($item->image)}}" alt="" style="    width: 125px;" /></a>
                                <div class="r-sidebar-pro-content">
                                   <div> <h5><a href="{{route('Shop.detail-product',['slug' => $item->slug, 'id'=>$item->id])}}">{{$item->name}}</a></h5> </div>
                                    <div>
                                    @if($product->sale==0)
                                        <span class="price">{{number_format($item->price)}} <sup>đ</sup> </span>
                                    @else
                                        <span class="price" style="color: red; ">{{number_format($item->sale)}} <sup>đ</sup> </span>
                                        <span class="old-price">{{number_format($item->price)}} <sup>đ</sup> </span>
                                    @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="single-product-right-sidebar clearfix">
                        <h2 class="left-title">Tags </h2>
                        <div class="category-tag">
                            @foreach($tags as $tag)
                                <a href="/danh-muc/{{ $tag->slug }}">#{{ $tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="fb-comments" data-href="http://viettelstore.com/" data-numposts="5" data-width=""></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('my_javascript')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function () {
        let listStart =$('.list_start .fa');
            listRatingText = {
                1 : 'Không Thích',
                2 : 'Tạm Được',
                3 : 'Bình Thường',
                4 : 'Rất Tốt',
                5 : 'Tuyệt Vời',
            }

            listStart.mouseover(function () {
                let $this = $(this);
                let number =$this.attr('data-key')
                listStart.removeClass('ad')
                $('.number_rating').val(number);
                $.each(listStart,function (key,value) {
                    if (key +1 <= number) {
                        $(this).addClass('ad')
                    }
                        });

                $('.list_text').text('').text(listRatingText[number]).show();

            });

                $('.js_rating').click(function (event) {
                    event.preventDefault();
                    if ($(" .form_rating").hasClass('hidden'))
                    {
                        $(".form_rating").addClass('active').removeClass('hidden')
                    }else {
                        $(".form_rating").addClass('hidden').removeClass('active')
                    }
                })
            $('.js_rating_product').click(function (e) {
                event.preventDefault()
                let content =$('#conntent').val();
                let  number_rating = $('.number_rating').val();
                let name =$('.name').val();
                let phone =$('.phone').val();
                let email =$('.email').val();


                // console.log(conntent,number_rating,name,phone,email)
                let url = $(this).attr('href');
               if (conntent && number_rating)
               {
                   $.ajax({
                       url: url,
                       type: 'GET',
                       data : {
                           number_rating:number_rating,
                           contents:  content,
                           name : name,
                           phone:phone,
                           email:email
                       },
                       dataType: "json",
                   }).done(function(result) {

                       if (result.code == 1) {
                                alert("bạn đã đánh giá thành công")
                           location.reload();
                       }
                   });
               }

            });
        });


        //---------------
        function addToCart() {

            var data = {};
            var idProduct = $('#idProduct').val();
            var quantity = $('#slsp').val();
            data = {
                id: idProduct,
                quantity: quantity
            };
            var totalProduct = $('#slgiohang').val();
            var tt = Number(totalProduct);
            var tc = Number(quantity);
            var ac = $('.ha').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/dat-hang/them-sp-vao-gio-hang',
                type: 'POST',
                data: data, // dữ liệu truyền sang nếu có
                dataType: "json", // kiểu dữ liệu trả về
                success: function (response) { // success : kết quả trả về sau khi gửi request ajax
                    if (response.msg != 'undefined' && response.msg == 'ok') {
                    alert(ac);
                        window.location='http://viettelstore.com/dat-hang';
                            // tt = tt + tc;
                            // $('#totalProduct').html(tt);
                    }
                },
                error: function (e) { // lỗi nếu có
                    console.log(e.message);
                }
            });

            return false;
        }
    </script>

@endsection
