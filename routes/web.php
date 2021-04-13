<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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
//     return view('auth.login');
// });

Route::get('/', 'Frontend\FrontendController@index')->name('user.index');
Route::get('/about', 'Frontend\FrontendController@about')->name('about');
Route::get('/blog', 'Frontend\FrontendController@blog')->name('blog');
Route::get('/projects', 'Frontend\FrontendController@projects')->name('projects');
Route::get('/faq', 'Frontend\FrontendController@faq')->name('faq');
Route::get('/hair_loss', 'Frontend\FrontendController@hair_loss')->name('hair_loss');
Route::get('/premature_ejaculation', 'Frontend\FrontendController@premature_ejaculation')->name('premature_ejaculation');

Route::get('/erectile_dysfunction', 'Frontend\FrontendController@erectile_dysfunction')->name('erectile_dysfunction');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('/', 'Admin\AdminController@index')->name('dashboard');
        Route::resource('permissions', 'Admin\PermissionController');
        Route::resource('roles', 'Admin\RoleController');
        Route::resource('users', 'Admin\UserController');
        Route::resource('categories', 'Admin\ServiceCategoryController');
        Route::resource('services', 'Admin\ServiceController');
        Route::resource('specializations', 'Admin\SpecializationController');
        Route::resource('doctor_details', 'Admin\DoctorDetailController');
        Route::resource('products', 'ProductController');
    });
});
