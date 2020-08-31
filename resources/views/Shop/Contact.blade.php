@extends('Shop.layouts.main')
@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang Chủ</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Liên Hệ</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-us-form">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="page-title contant-page-title">Liên Hệ Với Chúng Tôi</h2>
                        </div>
                        <div class="contact-form-center">
                            <form class="contact-form" id="contactForm" method="post" action="{{ route('Shop.create-contact') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="form-group primary-form-group">
                                            <label>Họ tên</label>
                                            <input type="text" class="form-control input-feild" id="contactEmail" name="name" value="">
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-feild" id="contactEmail" name="email" value="">
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Số Điên Thoại</label>

                                                <input type="text" class="form-control input-feild" id="contactEmail" name="phone" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="type-of-text">
                                            <div class="form-group primary-form-group">
                                                <label>Nội Dung</label>
                                                <textarea class="contact-text" name="content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit" name="submit" id="sendMessage" class="btn btn-primary" style="width: 267px; margin-top: -55px;"> Gửi </button>
                            </form>
                            <!-- CONTACT-FORM END -->
                        </div>
                    </div>
                    <!-- CONTACT-US-FORM END -->
                </div>
            </div>
        </div>
    </section>
@endsection
