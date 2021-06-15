 <?php

 use App\Http\Controllers\Admin\CategoriesController;
 use App\Http\Controllers\Admin\DashbordController;
 use App\Http\Controllers\Admin\PostsController;
 use App\Http\Controllers\Admin\TagsController;
 use App\Http\Controllers\Admin\UsersController;
 use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    Route::resource('/', DashbordController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/tags', TagsController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/posts', PostsController::class);
});

