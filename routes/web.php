<?php

use App\Http\Controllers\ExamController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Middleware\TableMiddleware;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/data/2021', function () {
    return view('2021');
});

Route::get('/data/2022', function () {
    return view('2022');
});

Route::get('/table2021', [
    TableController::class, 'index',
])->middleware(TableMiddleware::class);

Route::get('/list', [
    ListController::class, 'list'
]);

Route::get('/list/ordered', [
    ListController::class, 'ordered',
]);

Route::get('/exam', [
    ExamController::class, 'index'
]);

Route::get('/insert-product', [
    ProductController::class, 'create'
]);

Route::post('/product-insert', [
    ProductController::class, 'store'
]);

Route::get('/view-product-records', [
    ProductController::class, 'index'
]);

Route::get('/edit/{id}', [
    ProductController::class, 'edit'
]);

Route::patch('/edit/{id}', [
    ProductController::class, 'update'
]);

Route::delete('/delete-product/{id}', [
    ProductController::class, 'destroy'
]);
