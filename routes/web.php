<?php

use Illuminate\Support\Facades\Route;
use App\DataPns;

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

Auth::routes();
Route::get('/', 'Admin\AdminController@halamanlogin')->name('halaman-login');
Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard')->middleware('auth');
Route::get('/dashboard/data-pns/exportexcel_pns', 'Admin\DataPnsController@exportexcel_pns')->name('exportexcel_pns')->middleware('auth');
Route::resource('/dashboard/data-pns', 'Admin\DataPnsController')->middleware('auth');
Route::get('/dashboard/data-nonpns/exportexcel_nonpns', 'Admin\DataNonPnsController@exportexcel_nonpns')->name('exportexcel_nonpns')->middleware('auth');
Route::resource('/dashboard/data-nonpns', 'Admin\DataNonPnsController')->middleware('auth');
Route::resource('/dashboard/data-bidang', 'Admin\BidangController')->middleware('auth', 'admin');
Route::resource('/dashboard/data-subbidang', 'Admin\SubBidangController')->middleware('auth', 'admin');
Route::resource('/dashboard/data-akun', 'Admin\DataAkunController')->middleware('auth', 'admin');
Route::get('/ajaxoptionsubbidang/{id_bidang}', 'Admin\DataPnsController@ajaxoptionsubbidang')->name('ajaxoptionsubbidang');
