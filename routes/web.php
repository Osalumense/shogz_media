<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

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
    return view('pages.front_end.index');
});
Route::post('/contact-us/add', [PagesController::class, 'contactSubmit']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');   
});

Route::group(['prefix' => 'admin'], function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/', [PagesController::class, 'renderAdminIndex']);
        Route::get('/contact', [PagesController::class, 'renderContactMails']);
        Route::get('/fetchcontactmails', [PagesController::class, 'displayContactMails']);
        Route::get('/edit-website', [PagesController::class, 'renderEditWebsitePage']);
        Route::post()
    });

});
