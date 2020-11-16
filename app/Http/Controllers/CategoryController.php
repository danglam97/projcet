<?php

namespace App\Http\Controllers;

use App\Category;
use App\components\MenuRecursive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $menuRecursive;
    public function __construct(MenuRecursive $menuRecursive)
    {
        $this->MenuRecursive = $menuRecursive;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Category::latest()->paginate(10); // sắp sếp theo thứ tự mới nhất && phân trang

        return view('Admin.category.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        $menu =  $this->MenuRecursive->MenuRecursiveAdd();

        return view('Admin.category.create', [
            'data' => $data, //truyền data sang view
            'menu' => $menu, //truyền data sang view
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


//validate
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ], [
            'name.required' => 'Tên không được để trống',
            'image.image' => 'Ảnh không đúng định dạng'
        ]);

        //luu vào csdl
        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->parent_id = $request->input('parent_id');

        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/category/';
            // upload file
            $request->file('image')->move($path_upload,$filename);

            $category->image = $path_upload.$filename;
        }

        $is_active = 0;
        if ($request->has('is_active')) {//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }

        $category->is_active = $is_active;

        $category->position = $request->input('position');
        $category->Type = $request->input('Type');
        $category->user_id = Auth::id();
        $category->save();

        // Chuyển hướng trang về trang danh sách
        return redirect()->route('quan-tri.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::findorFail($id);


        return view('Admin.category.show', [
            'data' => $data
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
        // get data from db
       $data = Category::all();
        $category = Category::findorFail($id);
        $menu =  $this->MenuRecursive->MenuRecursiveEdit($category->parent_id);

        return view('Admin.category.edit', [
            'data' => $data,
            'menu' => $menu,
            'category'=>$category

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
        //validate
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $is_active = 0;
        if ($request->has('is_active')){//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }

        $category = Category::findorFail($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->parent_id = $request->input('parent_id');
        $category->is_active = $is_active;
//        print_r($is_active); die();
        if ($request->hasFile('new_image')) {
            // xóa file cũ
            @unlink(public_path($category->image));
            // get file mới
            $file = $request->file('new_image');
            // get tên
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/category/';
            // upload file
            $request->file('new_image')->move($path_upload,$filename);

            $category->image = $path_upload.$filename;
        }

        $category->position = $request->input('position');
        $category->Type = $request->input('Type');
        $category->user_id = Auth::id();

        $category->save();


        // Chuyển hướng trang về trang danh sách
        return redirect()->route('quan-tri.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'status' => true
        ], 200);
    }

}
