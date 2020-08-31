@extends('Admin.layouts.main')
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <h1>
                    Thông tin chi tiết sản phẩm <a href="{{route('quan-tri.product.index')}}" class="btn btn-success pull-right"><i
                            class="fa fa-list"></i> Danh Sách SP</a>
                </h1>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Tên sản phẩm:</b></td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td><b> Hình ảnh:</b></td>
                                <td><img src="{{ asset($data->image) }}" width="250"></td>
                            </tr>
                            <tr>
                                <td><b>Sơ lược:</b></td>
                                <td>{!! $data->summary !!}</td>
                            </tr>
                            <tr>
                                <td><b>Mô tả:</b></td>
                                <td>{!!  $data->description !!}</td>
                            </tr>
                            <tr>
                                <td><b>Gía gốc:</b></td>
                                <td>{{ number_format($data->price) }}</td>
                            </tr>
                            <tr>
                                <td><b>Gía khuyến mãi:</b></td>
                                <td>{{ number_format($data->sale) }}</td>
                            </tr>
                            <tr>
                                <td><b>Vị trí:</b></td>
                                <td>{{ $data->position }}</td>
                            </tr>
                            <tr>
                                <td><b>Trạng thái</b></td>
                                <td>@if($data->is_active ==0)Ẩn @else Hiển thị @endif</td>
                            </tr>
                            <tr>
                                <td><b>Sản phẩm hot:</b></td>
                                <td>@if( $data->is_hot ==0)Không hot @else Sản phẩm hot @endif</td>
                            </tr>
                            <tr>
                                <td><b>Lượng views:</b></td>
                                <td>{{ $data->views }}</td>
                            </tr>
                            <tr>
                                <td><b>Danh mục sản phẩm:</b></td>
                                <td>{{ $category_name->name }}</td>
                            </tr>

                            </tbody></table>
                    </div>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
