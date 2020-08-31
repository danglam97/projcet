    @extends('Admin.layouts.main')

    @section('content')

        <section class="content-header">
            <h1>
                Danh Sách Banner <a href="{{route('quan-tri.banner.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Thêm Banner</a>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-tools">
                                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right"
                                           placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>TT</td>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th>Target</th>
                                    <th>Loại</th>
                                    <th>Vị trí</th>
                                    <th>Trạng thái</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                                </tbody>
                                <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                                @foreach($data as $key => $item)
                                    <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                        <td>{{$key+1}}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                        @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                            <img src="{{asset($item->image)}}" width="50" height="50">
                                            @endif
                                        </td>
                                        <td>{{ ($item->target == 1) ? '_blank' : '_self' }}</td>
                                        <td>{{ ($item->type == 1) ? 'slide' : 'background'}}</td>
                                        <td>{{ $item->position   }}</td>
                                        <td>{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                        <td class="text-center">
                                            <a href="{{route('quan-tri.banner.show', ['id'=> $item->id ])}}" class="btn btn-default"> <i class="fa fa-eye"></i></a>
                                            <a href="{{route('quan-tri.banner.edit', ['id'=> $item->id])}}" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <!-- Thêm sự kiện onlick cho nút xóa -->
                                            <a href="javascript:void(0)" class="btn btn-danger" onclick="destroyModel('banner', {{ $item->id }})" ><i class="fa fa-trash-o"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                {{ $data->links() }}
                            </ul>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
    @endsection

