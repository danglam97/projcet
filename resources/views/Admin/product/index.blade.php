@extends('admin.layouts.main')
@section('content')
    <style>tr td:first-child {max-width: 250px ;}
        .rating .active{
            color: #fd9727 !important;
        }
    </style>
    <section class="content-header">
        <h1>
            Danh Sách Sản Phẩm <a href="{{route('quan-tri.product.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"></i>  Thêm SP</a>
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
                                <th>TT</th>
                                <th style="max-with:200px">Tên SP</th>
                                <th>Danh Mục</th>
                                <th>Hình ảnh</th>
                                <th>Người Tạo</th>
                                <th>Giá KM</th>
                                <th>Giá Gốc</th>
                                <th>Vị trí</th>
                                <th>Sản phẩm Hot</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)


                                <?php
                                    $age = 0;
                                    if ($item->total_rating){
                                        $age = $item->total_number / $item->total_rating;

                                    }
                                ?>
                                <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                    <td>{{ $key +1}}</td>
                                    <td>{{ substr($item->name, 0, 50) }} <br>

                                        <div class="rating">
                                            đánh giá:
                                        @for($i=1; $i<=5 ; $i++)
                                            <i class="fa fa-star {{$i <= $age ? 'active': ''}}"></i>
                                        @endfor
                                        </div>
                                        <span>{{$age}}</span>
                                    </td>
                                    <td>{{  $item->category->name ?? 'Trống' }}</td>
                                    <td>
                                    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                        <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>

                                    <td>{{ ($item->user->name) ?? ' Trống' }}</td>
                                    <td>{{ $item->sale }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{$item->position}}</td>
                                    <td>{{ ($item->is_hot == 1) ? 'Có' : 'Không' }}</td>
                                    <td>{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td class="text-center">
                                        <a href="{{route('quan-tri.product.show', ['id'=> $item->id ])}}" class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{route('quan-tri.product.edit', ['id'=> $item->id])}}" class="btn btn-info"> <i class="fa fa-pencil-square-o"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger"  onclick="destroyModel('product', {{ $item->id }})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
                {{ $data->links() }}
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
