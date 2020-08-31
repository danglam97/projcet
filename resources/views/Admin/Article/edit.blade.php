@extends('Admin.layouts.main')
@section('content')
    <style>.w-50 { width: 50% }</style>
    <section class="content-header">
        <h1>
            Thêm mới tin tức <a href="{{route('quan-tri.article.index')}}" class="btn btn-success pull-right"><i
                        class="fa fa-list"></i> Danh Sách TT</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9 col-lg-9">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin bài viết</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('quan-tri.article.update', ['id' => $article->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input value="{{ $article->title }}" type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($article->image)
                                    <img src="{{asset($article->image)}}" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Loại</label>
                                <select class="form-control w-50" name="type">
                                    <option {{ ($article->type == 1 ? 'selected':'') }} value="1" >- Tin tức</option>
                                    <option {{ ($article->type == 2 ? 'selected':'') }} value="2">- Tin khuyến mại</option>
                                    <option {{ ($article->type == 3 ? 'selected':'') }} value="3">- Tin nổi bật</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input value="{{ $article->position }}" type="number" class="form-control w-50" id="position" name="position">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($article->is_active == 1 ? 'checked':'') }} type="checkbox" value="1" name="is_active"> <b>Hiển thị</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url)</label>
                                <input value="{{ $article->url }}" type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="10" >{{ $article->summary }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" >{{ $article->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input value="{{ $article->meta_title }}" type="text" class="form-control" id="meta_title" name="meta_title" >
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3" >{{ $article->meta_description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            </form>
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
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; // thiết lập chiều cao
        })
    </script>
@endsection
