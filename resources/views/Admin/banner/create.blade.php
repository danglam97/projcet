@extends('Admin.layouts.main')
@section('content')
<section class="content-header">
    <h1>
        Thêm mới Banner <a href="{{route('quan-tri.banner.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách</a>
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
                <form role="form" action="{{route('quan-tri.banner.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu đề</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tên tiêu đề">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Url">
                        </div>
                        <div class="form-group">
                            <label>Target</label>
                            <select class="form-control" name="target">
                                <option value="1">_blank</option>
                                <option value="2">_self</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loại</label>
                            <select class="form-control" name="type">
                                <option value="1">slide</option>
                                <option value="2">background</option>
                                <option value="3">banner right</option>
                            </select>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="is_active"> Trạng thái hiển thị
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vị trí</label>
                            <input type="number" class="form-control" id="position" name="position" value="0">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="editor1" name="description" class="form-control" rows="10" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
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
            _ckeditor.config.height = 500; // thiết lập chiều cao
        })
    </script>
@endsection
