<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Article;
use App\Category;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::latest()->paginate(20);

        return view('Admin.article.index', [
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
        return view('Admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'summary' => 'required',
            'description' => 'required',

        ]);

        $article = new Article(); // khởi tạo model
        $article->title = $request->input('title');
        $article->slug = Str::slug($request->input('title'));

        // Upload file
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/article/';
            // Thực hiện upload file
            $request->file('image')->move($path_upload,$filename); // upload lên thư mục public/uploads/article

            $article->image = $path_upload.$filename;
        }

        $article->type = $request->input('type');
        $article->position = $request->input('position');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')){//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $article->is_active=$is_active;
        $article->url = $request->input('url'); // số lượng
        $article->summary = $request->input('summary');
        $article->description = $request->input('description');
        $article->meta_title = $request->input('meta_title');
        $article->meta_description = $request->input('meta_description');
        $article->save();

        // chuyển hướng đến trang
        return redirect()->route('quan-tri.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findorFail($id);

        return view('Admin.article.edit', [
            'article' => $article
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'summary' => 'required',
            'description' => 'required',

        ]);

        $article = Article::findorFail($id);; // khởi tạo model
        $article->title = $request->input('title');
        $article->slug = str_slug($request->input('title'));

        // Thay đổi ảnh
        if ($request->hasFile('new_image')) {
            // xóa file cũ
            @unlink(public_path($article->image));
            // get file mới
            $file = $request->file('new_image');
            // get tên
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/article/';
            // upload file
            $request->file('new_image')->move($path_upload,$filename);

            $article->image = $path_upload.$filename;
        }

        $article->type = $request->input('type');
        $article->position = $request->input('position');
        // Trạng thái
        $is_active =0;
        if ($request->has('is_active')){//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $article->is_active=$is_active;

        $article->url = $request->input('url'); // số lượng
        $article->summary = $request->input('summary');
        $article->description = $request->input('description');
        $article->meta_title = $request->input('meta_title');
        $article->meta_description = $request->input('meta_description');
        $article->save();

        // chuyển hướng đến trang
        return redirect()->route('quan-tri.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        Article::destroy($id);

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'status' => true
        ], 200);
    }
}
