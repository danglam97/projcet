<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vendor::latest()->paginate(4);// sắp sếp theo thứ tự mới nhất && phân trang
        // gọi đến view
        return view('Admin.vendor.index', [
            'data' => $data // truyền dữ liệu sang view Index
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Vendor::all();

        return view('Admin.vendor.create', [
            'data' => $data //truyền data sang view
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate dữ liệu
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        //Khởi tạo Model và gán giá trị từ form cho những thuộc tính của đối tượng (cột trong CSDL)
        $vendor = new Vendor();
        $vendor->name = $request->input('name');
        $vendor->slug = Str::slug($request->input('name')); // slug

        // email
        $vendor->email = $request->input('email');
        // phone
        $vendor->phone = $request->input('phone');


        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $request->file('image')->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename;
        }
        // website
        $vendor->website = $request->input('website');
        // address
        $vendor->address = $request->input('address');
        // Vị trí
        $vendor->position = $request->input('position');

        // Trạng thái
        if ($request->has('is_active')){//kiem tra is_active co ton tai khong?
            $vendor->is_active = $request->input('is_active');
        }

        // Lưu
        $vendor->save();

        // Chuyển hướng trang về trang danh sách
        return redirect()->route('quan-tri.vendor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Vendor::findorFail($id);

        // Gọi tới view
        return view('Admin.vendor.show', [
            'data' => $data // truyền dữ liệu sang view show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vendor = Vendor::findorFail($id);

        return view('Admin.vendor.edit', [
            'vendor' => $vendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate dữ liệu
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        //Lấy đối tượng  và gán giá trị từ form cho những thuộc tính của đối tượng (cột trong CSDL)
        $vendor = Vendor::findorFail($id);
        $vendor->name = $request->input( 'name');
        $vendor->slug = Str::slug($request->input('name')); // slug


        // email
        $vendor->email = $request->input('email');
        // phone
        $vendor->phone = $request->input('phone');

        if ($request->hasFile('new_image')) { // dòng này Kiểm tra xem có image có được chọn
            // xóa file cũ
            @unlink(public_path($vendor->image)); // hàm unlink của PHP không phải laravel , chúng ta thêm @ đằng trước tránh bị lỗi
            // get new_image
            $file = $request->file('new_image');
            // đặt tên cho file new_image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/';
            // Thực hiện upload file
            $request->file('new_image')->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename; // gán giá trị ảnh mới cho thuộc tính image của đối tượng
        }

        // website
        $vendor->website = $request->input('website');

        // địa chỉ
        $vendor->address = $request->input('address');
//        echo '<pre>';
//        print_r($vendor); die();
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) {//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $vendor->is_active = $is_active;
        // Vị trí
        $vendor->position = $request->input('position');

        // Lưu
        $vendor->save();

        // Chuyển hướng trang về trang danh sách
        return redirect()->route('quan-tri.vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Vendor::destroy($id);
        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'status' => true
        ], 200);
    }
    }

