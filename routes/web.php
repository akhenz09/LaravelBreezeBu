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

Route::get('/', function () {
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

Route::get('/exam', function () {
    return view('/landingpage/test');
});

Route::get('/flipbooktest', function () {
    return view('/turnjs4/samples/magazine/index');
});

Route::get('not-approved', function () {
    return view('auth.not-approved');
})->name('not.approved');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Controller
    Route::middleware(['role:admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::resource('/roles', RoleController::class);
        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
        Route::resource('/permissions', PermissionController::class);
        Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
        Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
        Route::resource('/users', UserController::class)->only(['index', 'show', 'destroy']);
        Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
        Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
        Route::resource('/users', UserController::class)->only(['index', 'show', 'destroy']);
        Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
        Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
        Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
        Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
        Route::get('/users/{user_id}/{approval}', [UserController::class, 'approve'])->name('users.approve');
    });

    // Admin User Approval
    Route::middleware(['role:admin'])->group(function () {
        Route::get('user-approval', [UserApprovalController::class, 'index'])->name('user_approval.index');
        Route::post('user-approval/approve/{user}', [UserApprovalController::class, 'approve'])->name('user_approval.approve');
        Route::post('user-approval/reject/{user}', [UserApprovalController::class, 'reject'])->name('user_approval.reject');
        Route::get('not-approved', function () {
        return view('auth.not-approved'); // Create this view
        })->name('not.approved');
    });

    // Flashcard
    Route::middleware(['role:admin'])->group(function () {
        Route::post('/flashcards', [FlashcardController::class, 'store'])->name('flashcards.store');
        Route::get('/flashcards/create', [FlashcardController::class, 'create'])->name('flashcards.create');
        Route::get('/flashcards/{id}/edit', [FlashcardController::class, 'edit'])->name('flashcards.edit');
        Route::delete('/flashcards/{id}', [FlashcardController::class, 'destroy'])->name('flashcards.destroy');
    });

    // MCQ
    Route::middleware(['role:admin'])->group(function () {

        Route::post('/mcq-questions', [MCQQuestionController::class, 'store'])->name('mcq-questions.store');
        Route::get('/mcq-questions/{id}/edit', [MCQQuestionController::class, 'edit'])->name('mcq-questions.edit');
        Route::put('/mcq-questions/{id}', [MCQQuestionController::class, 'update'])->name('mcq-questions.update');
        Route::delete('/mcq-questions/{id}', [MCQQuestionController::class, 'destroy'])->name('mcq-questions.destroy');
        Route::get('/admin/view-results', [UserController::class, 'viewResults'])->name('admin.view-results');
        Route::get('/indexadmin', [MCQQuestionController::class, 'indexAdmin'])->name('mcq-questions.indexadmin');
    });


    // Other MCQ routes

    // Assessment routes
    Route::middleware(['permission:Assessment'])->group(function () {
        Route::resource('mcq-questions', MCQQuestionController::class);
        Route::get('/flashcards', [FlashcardController::class, 'index'])->name('flashcards.index');
        Route::get('/flashcards/{id}', [FlashcardController::class, 'show'])->name('flashcards.show');
        Route::get('/mcq-questions', [MCQQuestionController::class, 'index'])->name('mcq-questions.index');
        Route::get('/take-exam', [MCQQuestionController::class, 'takeExam'])->name('take.exam');
        Route::post('/exam-submit', [MCQQuestionController::class, 'examSubmit'])->name('exam-submit');
        Route::get('/mcq-questions/{id}', [MCQQuestionController::class, 'show'])->name('mcq-questions.show');

    });

    // Other authenticated user routes
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});


require __DIR__.'/auth.php';
