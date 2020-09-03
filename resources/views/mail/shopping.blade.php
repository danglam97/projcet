<img src="{{asset($setting->image)}}" alt="">
<h2>Thông tin chi tiết hóa đơn</h2>
<h3>Hóa đơn số: {{$order->code}} </h3>
<div>
    <h4>Thông tin khách hàng</h4>
    <p>Họ tên: {{$order->fullname}} </p>
    <p>Địa chỉ: {{$order->address}} </p>
    <p>Số điện thoại: {{$order->phone}} </p>
    <p>Ghi chú: {{$order->note}}</p>
</div>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>

<table>
    <tr>
        <th>Tên sản phẩm đã đặt</th>
        <th>Ảnh</th>
        <th>Số lượng</th>
        <th>Giá tiền</th>
    </tr>
    @foreach($order->details as $key => $item)
    <tr>
        <td>{{  $item->name ?? 'Trống' }}</td>
    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
        <img src="{{asset($item->image)}}" width="50" height="50">
        @endif
        <td>{{$item->qty}}</td>
        <td>{{number_format($item->price)}}</td>
    </tr>
    @endforeach
</table>

<ul>
    <li>
        Tổng tiền: {{$order->total}}
    </li>
</ul>
<div>
    <p>{{$setting->company}}</p>
    <p>SĐt:{{$setting->phone}}</p>
    <p>Địa Chỉ:{{$setting->address}}</p>


</div>
