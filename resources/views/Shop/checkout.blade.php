@extends('Shop.layouts.main')

@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                    <h3 class="text-center"><i class="fa fa-opencart"></i> {{ session('msg') ? session('msg') : '' }}</h3>
                    <a href="/" class="buyother"><i class="fa fa-chevron-left"></i> Về trang chủ</a>
                </div>
            </div>
        </div>
    </section>
@endsection
