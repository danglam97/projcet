<div class="row">
    <!-- MAIN-SLIDER-AREA START -->
    <div class="main-slider-area">
        <!-- SLIDER-AREA START -->
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
            <div class="slider-area d-flex">
                <div id="wrapper">
                    <div class="slider-wrapper">

                        <div id="mainSlider" class="nivoSlider">
                            @foreach($banners as $item)

                                <a href="{{$item->url}}" target="{{$item->target}}" title="{{ $item->slug }}"> <img src="{{$item->image}} "/></a>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12 ">--}}
{{--            <div class="slider-area d-flex">--}}
{{--                <div id="wrapper">--}}

{{--                    <div class="slider-wrapper">--}}
{{--                        @foreach($data as $item)--}}
{{--                        <div  class="col-lg-2 col-md-2 col-sm-9 col-xs-12" style="width: 140px">--}}

{{--                                <img src="{{asset($item->image)}}" alt="main slider" title="#htmlcaption2"/>--}}

{{--                        </div>--}}
{{--                            <div  class="col-lg-2 col-md-2 col-sm-9 col-xs-12">--}}

{{--                                <a href=""> {!!substr($item->summary, 0, 50) !!}</a>--}}
{{--                            </div>--}}

{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!-- MAIN-SLIDER-AREA END -->
</div>
