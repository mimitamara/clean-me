<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubscriptionController;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('what-we-do', 'pages.what-we-do')->name('pages.what-we-do');
Route::view('about-us', 'pages.about-us')->name('pages.about-us');

Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('pages.subscriptions');
Route::get('categories', [CategoriesController::class, 'index'])->name('pages.categories');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [AdminController::class, 'categories'])->name('index');
        Route::get('/create', [AdminController::class, 'createCategory'])->name('create');
        Route::post('/create', [AdminController::class, 'storeCategory'])->name('store');
        Route::get('/{category}', [AdminController::class, 'editCategory'])->name('edit');
        Route::post('/{category}', [AdminController::class, 'updateCategory'])->name('update');
        Route::delete('{category}', [AdminController::class, 'deleteCategory'])->name('delete');
    });

    Route::prefix('steps')->name('steps.')->group(function () {
        Route::get('/', [AdminController::class, 'steps'])->name('index');
        Route::post('/', [AdminController::class, 'storeStep'])->name('store');
        Route::get('/edit/{step}', [AdminController::class, 'editStep'])->name('edit');
        Route::post('/update/{step}', [AdminController::class, 'updateStep'])->name('update');
        Route::delete('{step}', [AdminController::class, 'deleteStep'])->name('delete');
    });

    Route::prefix('tasks')->name('tasks.')->group(function () {
        Route::get('/', [AdminController::class, 'tasks'])->name('index');
        Route::get('{task}', [AdminController::class, 'task'])->name('show');
    });
});

Route::prefix('tasks')->name('tasks.')->group(function () {
    Route::get('/', [\App\Http\Controllers\TaskController::class, 'index'])->name('index');
    Route::get('create', [\App\Http\Controllers\TaskController::class, 'create'])->name('create');
    Route::post('create', [\App\Http\Controllers\TaskController::class, 'store'])->name('store');
    Route::post('finish-step/{step}', [\App\Http\Controllers\TaskController::class, 'finishStep'])->name('finish-step');
    Route::get('{task}', [\App\Http\Controllers\TaskController::class, 'show'])->name('show');
});

Route::get('profile', [\App\Http\Controllers\ClientController::class, 'edit'])->name('client.profile');
Route::post('profile', [\App\Http\Controllers\ClientController::class, 'update'])->name('client.profile');

Route::get('subscription/{subscription}', [\App\Http\Controllers\StripeController::class, 'stripe'])->name('stripe');
Route::post('subscription/{subscription}/pay/', [\App\Http\Controllers\StripeController::class, 'stripePost'])->name('stripe.post');
