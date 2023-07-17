<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DemoMailController;
use App\Http\Controllers\FeaturedImagesControlller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StringController;
use App\Http\Controllers\UrlController;
use App\Models\FeaturedImages;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProductController::class, 'show']);

Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/show', [CartController::class, 'show']);
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');

# Định tuyến cơ bản
/*
Route::get('/post', function () {
    return "Trang danh sách bài viết";
});

Route::get('/admin/product', function () {
    return "Trang quản lí sản phẩm";
});

Route::get('/admin/product/add', function () {
    return "Trang thêm sản phẩm";
});
*/

#Định tuyến có tham số
/*
Route::get('/posts/{id}', function ($id) {
    return $id;
});

Route::get('/posts/{cat_id}/page/{page}', function ($cat_id, $page) {
    return $cat_id . '-' . $page;
});
*/
#Đặt tên định tuyến
/*
Route::get('/users/profile', function () {
    return route('profile');
})->name('profile');

Route::get('/admin/product/add', function () {
    return route('product.add');
})->name('product.add');
*/
#Định tuyến có tham số tùy chọn
//domain.com/users/ => Hiển thị danh sách users
//domain.com/users/4 => Hiển thị thông tin chi tiết user có id là 4
/*
Route::get('/users/{id?}', function ($id = 0) {
    return $id;
});
*/

#Định tuyến với tham số ràng buộc biểu thức chính quy

/*
Route::get('/product/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');
*/

/*
Route::get('/product/{slug}/{id}', function ($slug, $id) {
    return $id . '---' . $slug;
})->where(['slug' => '[A-Za-z0-9-_]+']);

*/
#Định tuyến qua 1 view không cần qua controller model
/*
Route::view('/welcome', 'welcome');

Route::view('/posts', 'posts', ['id' => 10]);
*/
#Định tuyến qua controller

// Route::get('/posts/{id}', [PostController::class, 'detail']);

#Bài tập routing
//Tạo cấu trúc url của trang quản lí bài viết trong admin
//Thêm bài viết
//Danh sách bài viết
//Cập nhật bài viết
//Xóa bài viết

/*
Route::get('/admin/post/add', function () {
    return "Trang thêm bài viết trong admin";
});

Route::get('/admin/post/show/{id?}', function ($id = 0) {
    if ($id == 0)
        return "Trang danh sách bài viết";
    else
        return "Chi tiết bài viết có id là: " . $id;
});


Route::get('/admin/post/update/{id}', function ($id) {
    return "Cập nhật bài viết có id: " . $id;
});

Route::get('/admin/post/delete/{id}', function ($id) {
    return "Xóa bài viết có id: " . $id;
});
*/
/*

Route::get('/product/add', [ProductController::class, 'add']);
Route::get('/product/show/{id}', [ProductController::class, 'show']);
Route::get('/product/update/{id}', [ProductController::class, 'update']);


Route::resource('/post', PostController::class);


Route::get('/admin/post/add', [AdminPostController::class, 'add']);
Route::get('/admin/post/show', [AdminPostController::class, 'show']);
Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete']);
Route::get('/admin/post/update/{id}', [AdminPostController::class, 'update']);


Route::get('/child', function () {
    return view('child', ['data' => 5]);
});

Route::get('/users/insert', function () {
    DB::table('users')->insert(
        array(
            'name' => 'Ha Thanh Bich',
            'email' => 'thanbich@gmail.com',
            'password' => bcrypt('thanhbich2003')
        ),
    );
});

Route::get('/posts/add', [PostController::class, 'add']);
Route::get('/posts/show', [PostController::class, 'show']);
Route::get('/posts/update/{id}', [PostController::class, 'update']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);

Route::get('/products/add', [ProductController::class, 'add']);
Route::get('/products/show', [ProductController::class, 'show']);
Route::get('/products/update/{id}', [ProductController::class, 'update']);
Route::get('/products/delete/{id}', [ProductController::class, 'delete']);

*/

//ELOQUENT ORM

// Route::get('/posts/read', function () {
//     $posts = Post::all();
//     return $posts;
// });


// Route::get('/posts/read', [PostController::class, 'read']);
// Route::get('/posts/add', [PostController::class, 'add']);
// Route::get('/posts/update/{id}', [PostController::class, 'update']);
// Route::get('/posts/delete/{id}', [PostController::class, 'delete']);
// Route::get('/posts/restore/{id}', [PostController::class, 'restore']);
// Route::get('/posts/permanetlyDelete/{id}', [PostController::class, 'permanetlyDelete']);

// Route::get('/images/read', [FeaturedImagesControlller::class, 'read']);

// Route::get('role/show', [RoleController::class, 'show']);

// Route::get('users/reg/', function () {
//     return view('users.reg');
// });

// Route::post('posts/store', [PostController::class, 'store']);
// Route::get('/posts/show', [PostController::class, 'show'])->name('posts.show');


// Route::get('/helper/url', [UrlController::class, 'url']);
// Route::get('/helper/string', [StringController::class, 'string']);


// Route::get('/session/add', [SessionController::class, 'add']);
// Route::get('/session/show', [SessionController::class, 'show']);
// Route::get('/session/add_flash_session', [SessionController::class, 'add_flash_session']);
// Route::get('/session/delete', [SessionController::class, 'delete']);


// Route::get('/cookie/set', [CookieController::class, 'set']);
// Route::get('/cookie/get', [CookieController::class, 'get']);


// Route::get('/demo/sendmail', [DemoMailController::class, 'sendmail']);

// Route::group(['prefix' => 'laravel-filemanager'], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
