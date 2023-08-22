<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\MCQQuestionController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserApprovalController;

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

Route::get('/Home', function () {
    return view('/landingpage/landing-index');
});
Route::get('/contact', function () {
    return view('/landingpage/contact');
});
Route::get('/product', function () {
    return view('/landingpage/product-details');
});
Route::get('/shop', function () {
    return view('/landingpage/shop');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



    //Admin Controller
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::resource('/users', UserController::class)->only(['index', 'show', 'destroy']);
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    Route::get('/users/{user_id}/{approval}', 'UserController@approve');

// Admin User Approval
    Route::get('user-approval', [UserApprovalController::class, 'index'])->name('user_approval.index');
    Route::post('user-approval/approve/{user}', [UserApprovalController::class, 'approve'])->name('user_approval.approve');
    Route::post('user-approval/reject/{user}', [UserApprovalController::class, 'reject'])->name('user_approval.reject');
    Route::get('not-approved', function () {
    return view('auth.not-approved'); // Create this view
    })->name('not.approved');

    //Flashcard
    Route::post('/flashcards', [FlashcardController::class, 'store'])->name('flashcards.store');
    Route::get('/flashcards/create', [FlashcardController::class, 'create'])->name('flashcards.create');
    //MCQ
    Route::get('mcq/create', [MCQQuestionController::class, 'create'])->name('mcq.create');
    Route::post('/mcq', [MCQQuestionController::class, 'store'])->name('mcq.store');

});

Route::get('not-approved', function () {
    return view('auth.not-approved');
    })->name('not.approved');

Route::middleware(['permission:Assessment'])->group(function () {
    Route::get('/flashcards', [FlashcardController::class, 'index'])->name('flashcards.index');
    Route::get('/flashcards/{id}', [FlashcardController::class, 'show'])->name('flashcards.show');
    Route::get('/mcq', [MCQQuestionController::class, 'index'])->name('mcq.index');
    Route::get('/mcq/{id}', [MCQQuestionController::class, 'show'])->name('mcq.show');
    Route::post('/mcq/calculate-score', [MCQQuestionController::class, 'calculateScore'])->name('mcq.calculateScore');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
