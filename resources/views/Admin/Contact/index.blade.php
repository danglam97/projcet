@extends('Admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Danh Sách Liên Hệ

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
        </ol>
    </section>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>SỐ Điện Thoại</th>
                        <th>Email</th>
                        <th>Nội Dung</th>
                        <th class="text-center">Tác Vụ</th>
                    </tr>
                    @foreach($data as $key => $item)
                    <tr class="item-{{ $item->id }}">

                        <td>{{ $key + 1 }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->content}}</td>
                        <td class="text-center">
                            <a href="{{route('quan-tri.Contact.show', ['id'=> $item->id ])}}" class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <!-- Thêm sự kiện onlick cho nút xóa -->
                            <a href="javascript:void(0)" class="btn btn-danger" onclick="destroyModel('Contact', {{ $item->id }})" >
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {{ $data->links() }}
                    </ul>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
