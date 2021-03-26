<?php

use App\Http\Controllers\orderController;
use App\Http\Controllers\specialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;

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

Route::get('/', [specialController::class, 'randomData'])->name('home');

Route::get('/contact', [mailController::class, 'index']);

Route::get('/mechanicalres', function () {
    return view('mechanicalres');
})->name('mechanicalres');

Route::get('/heattreat', function () {
    return view('heattreat');
})->name('heattreat');

Route::get('/engineeringsup', function () {
    return view('engineeringsup');
})->name('engineeringsup');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::post('/contact/send', [mailController::class, 'send']);

Route::get('/order', [\App\Http\Controllers\orderMailController::class, 'index'])->name('order');
Route::post('/order',[\App\Http\Controllers\orderMailController::class, 'send'])->name('order-send');

Route::get('/login', [\App\Http\Controllers\loginController::class, 'index'])->name('login');
Route::post('/login/submit', [\App\Http\Controllers\loginController::class, 'submit']);

Route::get('/pullers', [orderController::class, 'pullers'])->name('pullers');
Route::post('/pullers/send', [orderController::class, 'send']);

Route::get('/linearsupp', [orderController::class, 'linearsupp'])->name('linearsupp');
Route::post('/linearsupp/send', [orderController::class, 'send']);

Route::get('/rte', [orderController::class, 'rte'])->name('rte');
Route::post('/rte/send', [orderController::class, 'send']);

Route::get('/induct', [orderController::class, 'induct'])->name('induct');
Route::post('/induct/send', [orderController::class, 'send']);

Route::get('/special', [specialController::class, 'allData'])->name('special');
Route::get('/special/{id}', [specialController::class, 'oneMessage'])->name('special-data-one');
Route::post('special-submit', [orderController::class, 'send'])->name('special-submit');
Route::get('/special/{id}/update', [specialController::class, 'updateMessage'])->name('special-update');
Route::post('/special/{id}/update', [specialController::class, 'updateMessageSubmit'])->name('special-update-submit');
Route::get('/special/{id}/delete', [specialController::class, 'deleteMessage'])->name('special-delete');
Route::get('/create', [specialController::class, 'createMessage'])->name('create');
Route::post('/create', [specialController::class, 'create'])->name('create-submit');

