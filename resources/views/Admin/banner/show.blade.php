@extends('Admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Chi Tiết Banner <a href="{{route('quan-tri.banner.index')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Danh sách Banner</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Tiêu đề:</b></td>
                                <td>{{ $data->title }}</td>
                            </tr>
                            <tr>
                                <td><b>Hình ảnh:</b></td>
                                <td><img src="{{ asset($data->image) }}" width="250"></td>
                            </tr>
                            <tr>
                                <td><b>Liên kết Url:</b></td>
                                <td>{{ $data->url }}</td>
                            </tr>
                            <tr>
                                <td><b>Target:</b></td>
                                <td>{{ ($data->target == 1) ? '_blank' : '_self' }}</td>
                            </tr>
                            <tr>
                                <td><b>Loại:</b></td>
                                <td>{{ ($data->type == 1) ? 'slide' : 'background' }}</td>
                            </tr>
                            <tr>
                                <td><b>Vị trí:</b></td>
                                <td>{{ $data->position }}</td>
                            </tr>
                            <tr>
                                <td><b>Trạng thái</b></td>
                                <td>{{ ($data->is_active == 1) ? 'Hiện thị' : 'Ẩn'  }}</td>
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
