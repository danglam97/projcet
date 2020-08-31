@extends('Admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Chỉnh sửa Banner <a href="{{route('quan-tri.banner.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('quan-tri.banner.update', ['id' => $banner->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input value="{{ $banner->title }}" type="text" class="form-control" id="title" name="title" placeholder="Nhập tên tiêu đề">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh</label>
                                <input type="file" id="new_image" name="new_image">
                                <!-- Hiển thị ảnh cũ -->
                                <br>
                                <img src="{{ asset($banner->image) }}" width="250">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                                <input value="{{ $banner->url }}" type="text" class="form-control" id="url" name="url" placeholder="Url">
                            </div>
                            <div class="form-group">
                                <label>Target</label>
                                <select class="form-control" name="target">
                                    <option value="1" {{ ($banner->target == 1) ? 'selected' : '' }} >_blank</option>
                                    <option value="2" {{ ($banner->target == 2) ? 'selected' : '' }}>_self</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại</label>
                                <select class="form-control" name="type">
                                    <option value="1" {{ ($banner->type == 1) ? 'selected' : '' }} >slide</option>
                                    <option value="2" {{ ($banner->type == 2) ? 'selected' : '' }} >background</option>
                                    <option value="3" {{ ($banner->type == 3) ? 'selected' : '' }} >banner right</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input {{ ($banner->is_active) ? 'checked':'' }} type="checkbox" value="1"
                                           name="is_active"> Trạng thái hiển thị
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control" id="position" name="position" placeholder="Nhập tên vị trí" value="{{ $banner->position }}">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="15" placeholder="Enter ...">{{ $banner->description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 450; // thiết lập chiều cao
        })
    </script>
@endsection
