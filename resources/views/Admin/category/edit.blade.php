@extends('Admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Sửa Danh Mục <a href="{{route('quan-tri.category.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('quan-tri.category.update', ['id' => $category->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">-- Chọn --</option>
                                    @foreach($data as $item)
                                        <option {{ ($category->parent_id == $item->id ? 'selected':'') }} value="{{ $item -> id }}">{{ $item -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input value="{{ $category->name }}" type="text" class="form-control" id="name"
                                       name="name" placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Change File</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($item->image)
                                    <img src="{{asset($category->image)}}" width="200">
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input {{ ($category->is_active) ? 'checked':'' }} type="checkbox" value="1" name="is_active"> Trạng thái
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input value="{{ $category->position }}" type="text" class="form-control" id="position"
                                       name="position" placeholder="Nhập tên vị trí">
                            </div>
                            <div class="form-group">
                                <label>Loại</label>
                                <select class="form-control" name="Type">
                                    <option value="1" {{ ($category->Type == 1) ? 'selected' : '' }} >Sản Phẩm</option>
                                    <option value="2" {{ ($category->Type == 2) ? 'selected' : '' }}>Tin Tức</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
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
