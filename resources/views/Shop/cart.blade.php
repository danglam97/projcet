@extends('Shop.layouts.main')
@section('content')
    <style>
        #cart-summary tbody td.cart-product img { border: 0px }
        .returne-continue-shop .procedtocheckout {
            background: #ff4f4f none repeat scroll 0 0;
            border-radius: 4px;
            color: #fff;
            display: block;
            float: right;
            font-size: 20px;
            line-height: 50px;
            padding: 0 16px;
            transition: all 500ms ease 0s;
        }
        .contact-form label {
            display: block;
            margin: 14px 0;
        }
    </style>
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>Giỏ Hàng</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPPING-CART SUMMARY START -->
                    <h2 class="page-title">Thông tin giỏ hàng</h2>
                    <!-- SHOPPING-CART SUMMARY END -->
                </div>

                <div id="my-cart">
                    @include('shop.components.cart')
                </div>

            @if(session('cart'))
                <!-- Thông Tin Cá Nhân -->
                    <form method="post" action="{{ route('shop.cart.checkout') }}">
                        @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- CONTACT-US-FORM START -->
                            <div class="contact-us-form">
                                <div class="contact-form-center">
                                    <h3 class="contact-subheading">Thông Tin Cá Nhân</h3>
                                    <!-- CONTACT-FORM START -->
                                    <div class="contact-form" id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <div class="form-group primary-form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" class="form-control input-feild" id="fullname" name="fullname" value="">
                                                    @if ($errors->has('fullname'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('fullname') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group primary-form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control input-feild" id="contactEmail" name="email" value="">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group primary-form-group">
                                                    <label>Số ĐT</label>
                                                    <input type="text" class="form-control input-feild" id="contactEmail" name="phone" value="">
                                                    @if ($errors->has('phone'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                <div class="type-of-text">
                                                    <div class="form-group primary-form-group">
                                                        <label>Địa chỉ nhận hàng</label>
                                                        <textarea style="height: auto" class="contact-text" name="address"></textarea>
                                                        @if ($errors->has('address'))
                                                            <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('address') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="type-of-text">
                                                    <div class="form-group primary-form-group">
                                                        <label>Ghi chú</label>
                                                        <textarea style="height: 104px" class="contact-text" name="note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT-FORM END -->
                                </div>
                            </div>
                            <!-- CONTACT-US-FORM END -->
                        </div>
                        <div style="margin-top: 20px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- RETURNE-CONTINUE-SHOP START -->
                            <div class="returne-continue-shop">
                                <a href="{{ route('shop.cart.destroy') }}" class="continueshoping"><i class="fa fa-chevron-left"></i>Hủy đặt hàng</a>
                                <button type="submit" class="procedtocheckout">Gửi đơn hàng</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>
@endsection

