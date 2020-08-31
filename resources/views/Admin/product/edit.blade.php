@extends('Admin.layouts.main')
@section('content')
    <style>.w-50 { width: 50% }</style>
    <section class="content-header">
        <h1>
            Chỉnh sửa thông tin sản phẩm <a href="{{route('quan-tri.product.index')}}" class="btn btn-success pull-right"><i
                    class="fa fa-list"></i> Danh Sách SP</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('quan-tri.product.update', ['id' => $product->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($product->image)
                                    <img src="{{asset($product->image)}}" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Số lượng</label>
                                <input type="number" class="form-control w-50" id="stock" name="stock" value="{{ $product->stock }}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Giá gốc (vnđ)</label>
                                        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Giá khuyến mại (vnđ)</label>
                                        <input type="number" class="form-control" id="sale" name="sale" value="{{ $product->sale }}">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control w-50" name="category_id">
                                    <option value="0">-- chọn Danh Mục --</option>
                                    @foreach($categories as $category)
                                        <option {{ ($product->category_id == $category->id ? 'selected':'') }} value="{{ $category -> id }}">{{ $category -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thương hiệu</label>
                                <select class="form-control w-50" name="brand_id">
                                    <option value="0">-- chọn Thương Hiệu--</option>
                                    @foreach($brands as $brand)
                                        <option {{ ($product->brand_id == $brand->id ? 'selected':'') }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhà cung cấp</label>
                                <select class="form-control w-50" name="vendor_id">
                                    <option value="0">-- chọn NCC --</option>
                                    @foreach($vendors as $vendor)
                                        <option {{ ($product->vendor_id == $vendor->id ? 'selected':'') }} value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã hàng (SKU)</label>
                                <input  value="{{ $product->sku }}" type="text" class="form-control w-50" id="sku" name="sku" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control w-50" id="position" name="position" value="{{ $product->position }}">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($product->is_active) ? 'checked':'' }} type="checkbox" value="1" name="is_active"> <b>Trạng thái</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($product->is_hot) ? 'checked':'' }} type="checkbox" value="1" name="is_hot"> <b>Sản phẩm Hot</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url) tùy chỉnh</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="10" >{{ $product->summary }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" >{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $product->meta_title }}" >
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="3" >{{ $product->meta_description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
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
