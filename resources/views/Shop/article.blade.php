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
                        <span>Tin Tức</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row" >
            @foreach($data as $item)
            <ul class="blog-posts" style="padding-bottom: 15px;">
                <li class="post-item">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="entry-thumb image-hover2">
                                    <a href="{{route('Shop.detail-article', ['slug' => $item->slug])}}">
                                        <img src="{{asset($item->image)}}" alt="Blog" style="border-radius: 10px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="entry-ci">
                                    <h3 class="entry-title" style="font-size: 25px;"><a href="{{route('Shop.detail-article', ['slug' => $item->slug])}}">{{$item->title}}</a></h3>
                                    <div class="entry-meta-data" style="margin-top: 15px;">
                                        <span class="date"><i class="fa fa-calendar"></i>  &nbsp; {{$item->created_at}}</span>
                                    </div>
                                    <div class="entry-excerpt">
                                        {!! $item->summary !!}
                                    <div class="entry-more">
                                        <a href="{{route('Shop.detail-article', ['slug' => $item->slug])}}" class="btn btn-primary">chi tiết &nbsp; <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </li>

            </ul>
            @endforeach
            </div>
            <div class="pull-right">
            {{ $data->links() }}
            </div>
        </div>
    </section>
@endsection
