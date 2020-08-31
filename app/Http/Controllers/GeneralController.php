<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Brand;
use App\Category;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    protected $categories;
    public function __construct()
    {
        // Lấy dữ liệu - Danh mục sản phẩm
        $categories = Category::where('is_active',1)->orderBy('position', 'ASC')->get();
        // lấy dữ liệu - banner
        $banners = Banner::where('is_active',1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        $brand = Brand::where('is_active',1)->orderBy('position', 'ASC')->get();
        $this->categories = $categories;
        $setting = Setting::first();
        view()->share([
            'categories'=>$categories,
            'banners'=>$banners,
            'setting'=>$setting,
            'brand' => $brand
        ]);
    }
    public function notfound()
    {

        return view('Shop.Loi404',[
   'is_detail' => 1
        ]);
    }

}
