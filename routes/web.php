<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::fallback(function () {
    return "<h1>Sorry, the page you are looking for is not exist.</h1>";
});

Route::get('/', function () {
    return view('welcome', [WelcomeController::class]);
});

Route::controller(ContactController::class)->name('contacts.')->group(function() {
    Route::get('/contacts', 'index')->name('index');
    Route::get('/contacts/create', 'create')->name('create');
    Route::post('/contacts/store', 'store')->name('store');
    Route::get('/contacts/{id}', 'show')->name('show');
    Route::get('/contacts/{id}/edit', 'edit')->name('edit');
    Route::put('/contacts/{id}', 'update')->name('update');
    Route::delete('/contacts/{id}', 'destroy')->name('destroy');
});

Route::resource('/companies', CompanyController::class);

Route::get('/profile', function () {
    return view('auth.profile');
})->name('profile.show');

// Route::resources([
//     'tags' => TagController::class,
//     'tasks' => TagController::class,
// ]);

// Route::get('/contacts', [ContactController::class, 'index']) -> name('contacts.index');
// Route::get('/contacts/create', [ContactController::class, 'create']) -> name('contacts.create');
// Route::get('/contacts/{id}', [ContactController::class, 'show']) -> name('contacts.show');

require __DIR__.'/auth.php';