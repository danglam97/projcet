<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
// ROUTE Home
Route::get('/', 'ShopController@index');
Route::get('/tim-kiem', 'ShopController@search')->name('Shop.search');
//danh sách sản phẩm
Route::get('danh-muc/{slug}', 'ShopController@category')->name('Shop.category');
// chi tiết sản phẩm
Route::get('/chi-tiet-sp/{slug}/id={id}','ShopController@detailProduct')->name('Shop.detail-product');
//tin tức
Route::get('/tin-tuc', 'ShopController@article')->name('Shop.article');
//chi tiết tien tức
Route::get('/tin-tuc/{slug}', 'ShopController@detailArticle')->name('Shop.detail-article');
//liên hệ
Route::get('/lien-he', 'ShopController@contact')->name('Shop.contact');
//đẩy dữ liệu liên hệ lên from
Route::post('/lien-he', 'ShopController@createContact')->name('Shop.create-contact');
// Gio hang
Route::get('/dat-hang', 'CartController@index')->name('shop.cart');
// thêm sp vào giỏ hàng
Route::get('/dat-hang/them-sp-vao-gio-hang/{id}', 'CartController@addToCart')->name('shop.cart.add-to-cart');

// Xóa SP khỏi giỏ hàng
Route::get('/dat-hang/xoa-sp-gio-hang/{id}', 'CartController@removeToCart')->name('shop.cart.remove-to-cart');

// Cập nhật giỏ hàng
Route::get('/dat-hang/cap-nhat-gio-hang', 'CartController@updateToCart')->name('shop.cart.update-to-cart');

// Áp dụng giảm giá
Route::get('/dat-hang/ma-giam-gia', 'CartController@checkCoupon')->name('shop.cart.check-coupon');

// Hủy đơn hàng
Route::get('/dat-hang/huy-don-hang', 'CartController@destroy')->name('shop.cart.destroy');

// Thanh toán
Route::get('/thanh-toan', 'CartController@checkout')->name('shop.cart.checkout');

Route::post('/thanh-toan', 'CartController@postCheckout')->name('shop.cart.checkout');

Route::get('/danh-gia/{id}', 'RatingController@saveRating')->name('shop.rating.product');

// ROUTE GROUP Admin
// gôm nhóm router trang admin
Route::group(['prefix' => 'quan-tri', 'as'=> 'quan-tri.' ],function () {

    Route::get('/', 'AdminController@index')->name('admin');

// danh mục
    Route::resource('category', 'CategoryController');
// sản phẩm
    Route::resource('product', 'ProductController');
// banner
    Route::resource('banner', 'BannerController');
//Thương hiệu
    Route::resource('brand', 'BrandController');
    //Nhà CC
    Route::resource('vendor', 'VendorController');
// QL Đơn Hàng
    Route::resource('order', 'OrderController');
    Route::post('order/remove-to-cart', 'OrderController@removeToCart')->name('order.remove');
    // QL Tin Tức
    Route::resource('article', 'ArticleController');
// Setting web
    Route::resource('setting', 'SettingController');

    Route::resource('Contact', 'ContactController');
//
    });

Auth::routes();
