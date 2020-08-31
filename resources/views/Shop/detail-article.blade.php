@extends('Shop.layouts.main')
@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang Chủ<span><i class="fa fa-caret-right"></i> </span> </a>
                        <span> <i class="fa fa-caret-right"> </i> </span>
                        <a href="{{route('Shop.article')}}"> Tin Tức </a>
                        <span>{{$data->title}}</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">{{$data->title}}</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-meta-data">
                            <span class="date"><i class="fa fa-calendar"></i> &nbsp; {{$data->created_at}}</span>
                        </div>
                        <div class="entry-photo">
                            <img src="{{asset($data->image)}}" alt="Blog">
                        </div>
                        <div class="content-text clearfix">
                          {!! $data->description !!}
                        </div>

                    </article>
                    <!-- Related Posts -->

                </div>
                <!-- ./ Center colunm -->
            </div>
        </div>
    </section>
@endsection
