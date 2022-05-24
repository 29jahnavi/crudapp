<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResouceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CategoryController;

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
Route::group(['middleware' => [ 'isAdmin']], function() {  
  Route::get('/', [HomeController::class, 'layout']);
  Route::get('/form', [HomeController::class, 'form']);
  Route::get('/list', [HomeController::class, 'list']);
  Route::get('/list/trash', [HomeController::class, 'list_trash']);
  Route::get('/addpost', [HomeController::class, 'addpost']);
  Route::get('/addpost-list', [HomeController::class, 'addpost_list']);
  Route::get('/category', [CategoryController::class, 'category']);
  Route::get('/list-category', [CategoryController::class, 'list_category']);
  Route::get('/category/trash', [CategoryController::class, 'category_trash']);
  Route::get('/sub-category', [CategoryController::class, 'subcategory']);
  Route::get('/sub-category/list', [CategoryController::class, 'subcategorylist']);
  Route::get('/subcategory/trash', [CategoryController::class, 'subcategory_trash']);
});

Route::post('/form-insert', [HomeController::class, 'insert']);
Route::post('/addpost-insert', [HomeController::class, 'addpost_insert']);
Route::get('edit/{id}', [HomeController::class, 'edit']);
Route::get('delete/{id}', [HomeController::class, 'destroy']);
Route::get('force-delete/{id}', [HomeController::class, 'force_delete']);
Route::get('restore/{id}', [HomeController::class, 'restore']);
Route::get('addpost-edit/{id}', [HomeController::class, 'edit_addpost']);
Route::get('addpost-delete/{id}', [HomeController::class, 'destroy_addpost']);

Route::get('/login', [LoginController::class, 'login'])->middleware('checkAdmin');
Route::post('/login-successful', [LoginController::class, 'userlogin']);
Route::get('/logout', [LoginController::class, 'flush']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register-insert', [RegisterController::class, 'registrations']);
Route::post('/check-email', [RegisterController::class, 'check_email']);

Route::resource('form2', ResouceController::class);
Route::get('form2/{form2}/edit', [ResouceController::class, 'edit']);
Route::get('form2/{form2}', [ResouceController::class, 'destroy']);

Route::get('/resize-image', [ImageController::class, 'resizeImage']);
Route::post('/resize-image-submit', [ImageController::class, 'resizeImageSubmit'])->name('image.resize');
Route::get('/imageUpload-list', [ImageController::class, 'imageUpload_list']);

Route::post('/category-insert', [CategoryController::class, 'insert']);
Route::get('editcat/{id}', [CategoryController::class, 'editcategory']);
Route::get('delete-cat/{id}', [CategoryController::class, 'destroy_cat']);
Route::get('force-delete-cat/{id}', [CategoryController::class, 'force_delete_cat']);
Route::get('restore-cat/{id}', [CategoryController::class, 'restore_cat']);
Route::post('/subcategory-insert', [CategoryController::class, 'subcategoryinsert']);
Route::get('editsubcat/{id}', [CategoryController::class, 'editsubcategory']);
Route::get('delete-subcat/{id}', [CategoryController::class, 'destroy_subcat']);
Route::get('force-delete-subcat/{id}', [CategoryController::class, 'force_delete_subcat']);
Route::get('restore-subcat/{id}', [CategoryController::class, 'restore_subcat']);


Route::get('crop-image-upload', [ImageController::class, 'index']);
Route::post('crop-image-upload', [ImageController::class, 'uploadCropImage']);