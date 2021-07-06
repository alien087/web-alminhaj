<?php

use App\Http\Controllers\post_controller;
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

// Auth::routes(['verify' => true]);

Route::get('/safari', 'post_controller@index_safari')->name('safari');
Route::get('/khotmil_alquran', 'post_controller@index_khotmil')->name('khotmil');
Route::get('/berbagi', 'post_controller@index_berbagi')->name('berbagi');
Route::get('/pengajian', 'post_controller@index_pengajian')->name('pengajian');

Route::get('/mengaji', 'p_mengaji_controller@index')->name('mengaji')->middleware('auth')->middleware('is_verified');
Route::get('/', function () {
    return view('index_2');
})->name('index');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/detail_post/{id}', 'post_controller@show_post')->name('detail');

Route::get('/detail/{id}', 'p_mengaji_controller@show')->middleware('auth')->name('detail_video')->middleware('is_verified');

// Route::get('/detail1', function () {
//     return view('detail_video');
// })->name('detail_video');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dash')->middleware('auth')->middleware('is_admin');

Route::get('/dashboard_table', 'admin_controller@index')->middleware('auth')->middleware('is_admin')->name('table_user');
Route::get('/dashboard_table/{id}', 'admin_controller@edit')->middleware('auth')->middleware('is_admin')->name('edit_user_nonaktif');
Route::get('/dashboard_tables/{id}', 'admin_controller@edit_aktif')->middleware('auth')->middleware('is_admin')->name('edit_user_aktif');

Route::get('/all_user', 'admin_controller@index_all')->middleware('auth')->middleware('is_admin')->name('table_all_user');
Route::get('/all_user/{id}', 'admin_controller@edit_admin')->middleware('auth')->middleware('is_admin')->name('edit_admin');
Route::get('/all_users/{id}', 'admin_controller@edit_biasa')->middleware('auth')->middleware('is_admin')->name('edit_biasa');

Route::get('/verified_user', 'admin_controller@index_verified')->middleware('auth')->middleware('is_admin')->name('table_verified');
Route::get('/verified_user/{id}', 'admin_controller@edit_verified')->middleware('auth')->middleware('is_admin')->name('edit_verified');

Route::get('/detailss', function () {
    return view('detail_dummy');
})->name('ddummy');

Auth::routes();
Route::get('/register_user', function () {
    return view('auth/register');
})->name('register_user');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@adminHome')->middleware('auth')->middleware('is_admin')->name('admin.home');
Route::get('new_post', function () {
    return view('new_post');
})->name('new-post')->middleware('auth')->middleware('is_admin');
Route::post('new_post', 'post_controller@store')->name('upload_post')->middleware('auth')->middleware('is_admin');
Route::get('/delete/{id}', 'post_controller@destroy')->name('hapus_post')->middleware('auth')->middleware('is_admin');
Route::get('edit/{id}', 'post_controller@edit')->name('edit_post')->middleware('auth')->middleware('is_admin');
Route::post('edit/{id}', 'post_controller@update')->name('edits_post')->middleware('auth')->middleware('is_admin');

Route::get('new_post_mengaji', function () {
    return view('new_post_mengaji');
})->name('new-mengaji')->middleware('auth')->middleware('is_admin');
Route::post('new_post_mengaji', 'p_mengaji_controller@store')->name('upload_mengaji')->middleware('auth')->middleware('is_admin');
Route::get('/delete_mengaji/{id}', 'p_mengaji_controller@destroy')->name('hapus_mengaji')->middleware('auth')->middleware('is_admin');
Route::get('edit_mengaji/{id}', 'p_mengaji_controller@edit')->name('edit_mengaji')->middleware('auth')->middleware('is_admin');
Route::post('edit_mengaji/{id}', 'p_mengaji_controller@update')->name('edits_mengaji')->middleware('auth')->middleware('is_admin');

Route::get('/murrotal', 'murrotal_controller@index')->name('audios')->middleware('auth')->middleware('is_verified');

Route::get('new_audio', function () {
    return view('new_audio');
})->name('new-audio')->middleware('auth')->middleware('is_admin');
Route::post('new_audio', 'murrotal_controller@create')->name('upload_murrotal')->middleware('auth')->middleware('is_admin');
Route::get('/delete_murrotal/{id}', 'murrotal_controller@destroy')->name('hapus_murrotal')->middleware('auth')->middleware('is_admin');
Route::get('edit_murrotal/{id}', 'murrotal_controller@edit')->name('edit_murrotal')->middleware('auth')->middleware('is_admin');
Route::post('edit_murrotal/{id}', 'murrotal_controller@update')->name('update_murrotal')->middleware('auth')->middleware('is_admin');

Route::get('edit_profile/{id}', 'user_controller@edit')->name('edit_user')->middleware('auth')->middleware('is_verified');
Route::post('edit_profile/{id}', 'user_controller@update')->name('update_user')->middleware('auth')->middleware('is_verified');