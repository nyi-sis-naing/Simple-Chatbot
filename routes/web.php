<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/manage-questions', [AdminController::class, 'manageQuestions'])->name('admin.manage_questions');
    Route::get('admin/unanswered-questions', [AdminController::class, 'unansweredQuestions'])->name('admin.unanswered_questions');
    Route::get('admin/review-messages', [AdminController::class, 'reviewMessages'])->name('admin.review_messages');

    Route::get('/admin/add-question', [QuestController::class, 'addQuestion'])->name('admin.addquestion');
    Route::post('/admin/add-question', [QuestController::class, 'postAddQuestion'])->name('admin.post_addquestion');
    Route::get('/admin/edit-question/{id}', [QuestController::class, 'editQuestion'])->name('admin.editquestion');
    Route::post('/admin/edit-question/{id}', [QuestController::class, 'postEditQuestion'])->name('admin.postEditQuestion');

    Route::get('/admin/manage-questions/php', [QuestController::class, 'showPhpQuestions'])->name('admin.showPhpQuestions');
});

require __DIR__.'/auth.php';
