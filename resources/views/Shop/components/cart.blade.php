@if(session('cart'))
    @php
        $cart = session('cart');
        $products = $cart->products;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
        $discount = $cart->discount;
        $coupon = $cart->coupon;
        $payment = $totalPrice - $discount;
    @endphp

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row" style="margin-bottom: 20px">
            <div class="col-lg-6">
                <a href="/"><button style="color: black; background:white; border-color: black;" class="btn btn-default" type="submit">Tiếp Tục Mua Hàng</button></a>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <form action="{{ route('shop.cart.check-coupon') }}" method="get">
                    <div class="input-group">
                        <input value="{{ $coupon }}" name="coupon_code" style="width: 200px; float: right" type="text" class="form-control" placeholder="Nhập mã khuyến mại">
                        <span class="input-group-btn">
                            <button style="color: white; background: #e3007b; border-color: #e3007b;" class="btn btn-default" type="submit">Áp dụng</button>
                        </span>
                    </div>
                </form>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="text-align: right;color: red;">{{ $error }}</p>
                    @endforeach
                @endif
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-bordered" id="cart-summary">
                <!-- TABLE HEADER START -->
                <thead>
                <tr>
                    <th class="cart-product">Ảnh</th>
                    <th class="cart-description text-center">Sản phẩm</th>
                    <th class="cart-unit text-center">Giá</th>
                    <th class="cart_quantity text-center">Số lượng</th>
                    <th class="cart-total text-right">Thành tiền</th>
                    <th class="cart-delete text-center">&nbsp;</th>
                </tr>
                </thead>
                <!-- TABLE HEADER END -->
                <!-- TABLE BODY START -->
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="cart-product">
                            <a href="#"><img src="{{ asset($product['item']->image) }}" alt="{{ $product['item']->name }}"></a>
                        </td>
                        <td class="cart-description">
                            <p class="product-name"><a href="#">{{ $product['item']->name }}</a></p>
                            <small>SKU : {{ $product['item']->sku }}</small>
                        </td>
                        <td class="cart-unit">
                            <ul class="price text-right">
                                @if($product['item']->sale==0)
                                    <span class="price">{{number_format($product['item']->price)}} <sup>đ</sup> </span>
                                @else
                                    <span class="price" style="color: red; ">{{number_format($product['item']->sale)}} <sup>đ</sup></span>
                                    &nbsp;
{{--                                    <span class="old-price">{{number_format($product['item']->price)}}<sup>đ</sup></span>--}}
                                @endif
                            </ul>
                        </td>
                        <td class="cart_quantity text-center">
                            <div class="">
                                <input min="1" class="cart-plus-minus item-qty" data-id="{{ $product['item']->id }}" data-num="{{ $product['qty'] }}" type="number" name="qty" value="{{ $product['qty'] }}">
                            </div>
                        </td>
                        <td class="cart-total">
                            @if($product['item']->sale==0)
                                <span class="price">{{ number_format($product['qty'] * $product['item']->price ,0,",",".") }}đ</span>
                            @else
                            <span class="price">{{ number_format($product['qty'] * $product['item']->sale ,0,",",".") }}đ</span>

                            @endif
                        </td>
                        <td class="cart-delete text-center">
                            <a data-id="{{ $product['item']->id }}" href="javascript:void(0)"
                               class="cart_quantity_delete remove-to-cart" title="Xóa sản phẩm">
                                <i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                <!-- SINGLE CART_ITEM END -->
                </tbody>
                <!-- TABLE BODY END -->
                <!-- TABLE FOOTER START -->
                <tfoot>
                <tr>
                    <td class="text-right" colspan="4">Tạm tính</td>
                    <td class="price" colspan="2">

                        <span>{{ number_format($totalPrice ,0,",",".") }} đ</span>

                    </td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4">Giảm giá</td>
                    <td class="price" colspan="2"><span>- {{ number_format($discount ,0,",",".") }} đ</span></td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4">Thanh toán</td>
                    <td class="price" colspan="2"><span style="color: red">{{ number_format($payment ,0,",",".") }} đ</span></td>
                </tr>
                </tfoot>
                <!-- TABLE FOOTER END -->
            </table>
        </div>
    </div>
@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // xóa sản phẩm khỏi giỏ hàng
            $(document).on("click", '.remove-to-cart', function () {
                var result = confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng ?");
                if (result) {
                    var product_id = $(this).attr('data-id');
                    $.ajax({
                        url: '/dat-hang/xoa-sp-gio-hang/'+product_id,
                        type: 'get',
                        data: {
                            id : product_id
                        }, // dữ liệu truyền sang nếu có
                        dataType: "HTML", // kiểu dữ liệu trả về
                        success: function (response) {
                            $('#my-cart').html(response);
                        },
                        error: function (e) { // lỗi nếu có
                            console.log(e.message);
                        }
                    });
                }
            });

            // cập nhật số lượng giỏ hàng
            //$('.item-qty').change(function () {
            $(document).on("change", '.item-qty', function () {
                var product_id = $(this).attr('data-id');
                var before_qty = $(this).attr('data-num');
                var qty = $(this).val();

                if (qty == 0) {
                    alert('Nhập số lượng phải lớn hơn 0');
                    $(this).val(before_qty);
                    return false;
                }

                $.ajax({
                    url: '/dat-hang/cap-nhat-gio-hang',
                    type: 'get',
                    data: {
                        id : product_id,
                        qty : qty
                    }, // dữ liệu truyền sang nếu có
                    dataType: "json", // kiểu dữ liệu trả về
                    success: function (response) {
                        console.log(response);
                        // success
                        if (response.status == true) {
                            $('#my-cart').html(response.data);
                        }
                        // location.reload();

                    },

                    error: function (e) { // lỗi nếu có
                        console.log(e.message);
                    }

                });

            });
        })
    </script>
@endsection
@else
    <style>
        .buyother {
            display: block;
            overflow: hidden;
            background: #fff;
            line-height: 40px;
            text-align: center;
            margin: 15px auto;
            width: 300px;
            font-size: 14px;
            color: #288ad6;
            font-weight: 600;
            text-transform: uppercase;
            border: 1px solid #288ad6;
            border-radius: 4px;
        }
    </style>
    <h3 class="text-center"><i class="fa fa-opencart"></i>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>
    <a href="/" class="buyother"><i class="fa fa-chevron-left"></i> Về trang chủ</a>
@endif
