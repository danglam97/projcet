<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Brand;
use App\Category;
use App\Contact;
use App\Product;
use App\Rating;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShopController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $categories = $this->categories;
            // 3. Lấy danh sách phẩm theo thể loại
            $list = []; // chứa danh sách sản phẩm  theo thể loại

            foreach ($categories as $key => $category) {
                if ($category->parent_id == 0) { // check danh mục cha
                    $ids = [$category->id]; // $ids = array($category->id);

                    foreach ($categories as $child) {
                        if ($child->parent_id == $category->id) {
                            $ids[] = $child->id; // thêm phần tử vào mảng
                        }
                    } // ids = [1,7,8,9,..]

                    $list[$key]['category'] = $category;

                    $list[$key]['products'] = Product::where(['is_active' => 1])->whereIn('category_id', $ids)
                        ->limit(10)
                        ->orderBy('id', 'desc')
                        ->orderBy('position', 'ASC')
                        ->get();
                }
            }
//            dd($list);dd($list);

        return view('Shop.Shop',[
            'list' => $list
        ]);
    }
    public function Category($slug)
    {// step 1 : lấy chi tiết thể loại
        $cate = Category::where(['slug' => $slug  ])->first();


        if ($cate) {
            $categories = $this->categories;
            // step 1.1 Check danh mục cha -> lấy toàn bộ danh mục con để where In
            $ids = [];

            foreach ($categories as $key => $category) {
                if ($category->id == $cate->id) {
                    $ids[] = $cate->id;

                    foreach ($categories as $child) {
                        if ($child->parent_id == $cate->id) {
                            $ids[] = $child->id; // thêm phần tử vào mảng
                        }
                    }
                }
            }
            $data = Brand::all();
            // step 2 : lấy list sản phẩm theo thể loại
            $products = Product::where(['is_active' => 1])
                ->whereIn('category_id', $ids)
                ->orderBy('id', 'desc')
                ->paginate(8);
        //            dd($products);
            return view('Shop.category', [
                'category' => $cate,
                'products' => $products,
                'data'=>$data,
                'is_detail' => 1
            ]);
        }else{
            return $this->notfound();
        }
            }

    public function detailProduct($slug, $id)
    {
//        if (!$id){
//            return $this->notfound();
//        }

        $list = [] ;
        $rate_5 = 0;
        $rate_4 = 0;
        $rate_3 = 0;
        $rate_2 = 0;
        $rate_1 = 0;
        $rating = Rating::all();
        foreach ( $rating as $item ) {
            if ( $item->product_id == $id ) {
                $list [] = $item;
            }
        }

        foreach ( $list as $item ) {
            if ( $item->ra_number == 5 ) {
                $rate_5 ++;
            } elseif ( $item->ra_number == 4 ) {
                $rate_4 ++;
            } elseif ( $item->ra_number == 3 ) {
                $rate_3++;
            }elseif ( $item->ra_number == 2 ) {
                $rate_2++;
            }else{
                $rate_1 ++;
            }
        }
//        dd($rate_4);
            $product = Product::find($id);

            $category = Category::find($product->category_id);

            $tags = Category::where([
                ['id', '<>', 0],
                ['is_active', '=', 1]
            ])->get();

        $view = Product::where([
            ['category_id', '=', $category->id],
            ['total_number','=','COUNT()'],
            ['total_rating','=','COUNT()'],
            ['total_number', '/','total_rating'],

        ])->orderBy('id', 'ASC')
        ->orderBy('id', 'desc')
            ->limit(3)->get();
//dd($view);

        // step 2 : lấy list SP liên quan
            $relatedProducts = Product::where([
                ['is_active', '=', 1],
                ['category_id', '=', $category->id],
                ['id', '<>', $id]
            ])->orderBy('id', 'desc')->paginate(10);


            return view('Shop.detail-product', [
                'category' => $category,
                'product' => $product,
                'relatedProducts' => $relatedProducts,
                'tags' => $tags,
                'views' => $view,
                'rate_5' => $rate_5,
                'rate_4' => $rate_4,
                'rate_3' => $rate_3,
                'rate_2' => $rate_2,
                'rate_1' => $rate_1,
                'is_detail' => 1

            ]);


    }
    public function article()
    {



            $data = Article::latest()->paginate(2);
//        if (!$data){
//            return $this->notfound();
//        }
//

        return view('Shop.article', [
            'data' => $data
        ]);
    }
    public function detailArticle($slug)
    {


        $article = Article::where(['slug' => $slug, 'is_active' => 1])->first();
        if (!$article){

            return $this->notfound();
        }
        return view('Shop.detail-article',[
            'data'=>$article,
            'is_detail' => 1
        ]);
    }
    public function contact()
    {
        $data = [
            'product' => '',
            'is_contact' => 1
        ];
        return view('Shop.Contact',$data);
    }
    public function createContact(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required'
        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search ( Request $request)
    {
       // / b1. Lấy từ khóa tìm kiếm
        $keyword = $request->input('tu-khoa');

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND slug like '%$keyword%'";

        $products = Product::where([
//
            ['name', 'like', '%' . $keyword . '%'],
            ['is_active', '=', 1],
        ])->paginate(10);
//            dd($products);
        $totalResult = $products->total(); // số lượng kết quả tìm kiếm

        return view('Shop.search', [
            'products' => $products,
            'totalResult' => $totalResult,
            'keyword' => $keyword ? $keyword : ''
        ]);
    }
}
