<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TextBlockController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\WelcomeController;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Перенаправление на язык по умолчанию
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', [ProductController::class, 'publicIndex'])->name('home');
    Route::post('/contacts', [ContactFormController::class, 'submit'])->name('contacts.submit');
});


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('admin/users', UserController::class);
  Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    

    Route::resource('admin/products', ProductController::class);
    Route::get('/admin/submissions', [ContactFormController::class, 'index'])->name('admin.submissions');
    Route::delete('/admin/submissions/{id}', [ContactFormController::class, 'destroy'])->name('admin.submissions.destroy');
    Route::resource('admin/text-blocks', TextBlockController::class)->except(['create', 'store', 'destroy']);
   


    Route::group(['prefix' => 'laravel-filemanager'], function () {
        Lfm::routes();
    });
});
