<?php

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

Route::get('/', function () {
   
    return view('welcome');
});

/* pages */
/* Route::post('/about', 'pagesController@about')->name('about'); */
Route::get('about', function () {
    return view('pages.about');
});

Route::get('team', function () {
    return view('pages.team');
});
Route::get('why-choose-us', function () {
    return view('pages.why-choose-us');
});
Route::get('services', function () {
    return view('pages.services');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('get-a-quote', function () {
    return view('pages.get-a-quote');
});
Route::get('career', function () {
    return view('pages.career');
});
Route::get('blog', function () {
    return view('pages.blog');
});

//Blogs
Route::get('why-digital-marketing', function () {
    return view('pages.why-digital-marketing');
});
Route::get('facebook-ads-trends', function () {
    return view('pages.facebook-ads-trends');
});
Route::get('graphic-design-trends', function () {
    return view('pages.graphic-design-trends');
});



//services Page
Route::get('sales-business-development', function () {
    return view('pages.sales-business-development');
});

//Form Submit Data

Route::post('/contactForm', [App\Http\Controllers\contactController::class, 'contactForm'])->name('contactForm');
Route::post('/Newsletter', [App\Http\Controllers\contactController::class, 'Newsletter'])->name('Newsletter');
Route::post('/quoteForm', [App\Http\Controllers\quoteController::class, 'quoteForm'])->name('quoteForm');
Route::post('/careerForm', [App\Http\Controllers\careerController::class, 'careerForm'])->name('careerForm');





Auth::routes();
/* Route::get('/dashboard', function () {
    return view('dashboard'); */
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
/* })->middleware(['auth'])->name('dashboard'); */
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
//Route::get('/createUser', 'App\Http\Controllers\UserController@create');
//Route::get('/users', 'App\Http\Controllers\UserController@index');

require __DIR__.'/auth.php';


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user Management
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/createUser', [App\Http\Controllers\UserController::class, 'create'])->name('createUser');
Route::post('/storeUser', [App\Http\Controllers\UserController::class, 'store'])->name('storeUser');
Route::get('/showUser{id}', [App\Http\Controllers\UserController::class, 'show'])->name('showUser');
Route::get('/editUser{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('editUser');
Route::get('/updateUser{id}', [App\Http\Controllers\UserController::class, 'update'])->name('updateUser');
Route::get('/destroyUser{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroyUser');

Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
Route::get('/createRole', [App\Http\Controllers\RoleController::class, 'create'])->name('createRole');
Route::post('/storeRole', [App\Http\Controllers\RoleController::class, 'store'])->name('storeRole');
Route::get('/showRole{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('showRole');
Route::get('/editRole{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('editRole');
Route::get('/updateRole{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('updateRole');
Route::get('/destroyRole{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('destroyRole');

//admin
Route::get('/contacts', [App\Http\Controllers\contactController::class, 'contacts'])->name('contacts');
Route::get('/destroyContact{id}', [App\Http\Controllers\contactController::class, 'destroy'])->name('destroyContact');

Route::get('/careerList', [App\Http\Controllers\careerController::class, 'careerList'])->name('careerList');
Route::get('/destroyCareer{id}', [App\Http\Controllers\careerController::class, 'destroy'])->name('destroyCareer');

Route::get('/quoteList', [App\Http\Controllers\quoteController::class, 'quoteList'])->name('quoteList');
Route::get('/destroyQuote{id}', [App\Http\Controllers\quoteController::class, 'destroy'])->name('destroyQuote');