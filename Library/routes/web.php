<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('borrowed-books', [AdminController::class, 'borrowedBooks'])->name('admin.borrowedBooks');
        Route::get('all-books', [AdminController::class, 'allBooks'])->name('admin.allBooks');
        Route::get('all-users', [AdminController::class, 'allUsers'])->name('admin.allUsers');

        Route::post('admin/add-book', [AdminController::class, 'addBook'])->name('admin.addBook');

        Route::get('edit-book/{id}', [AdminController::class, 'editBook'])->name('admin.editBook');
        Route::get('delete-book/{id}', [AdminController::class, 'deleteBook'])->name('admin.deleteBook');
        Route::post('/search-student', [AdminController::class, 'searchStudent'])->name('admin.searchStudent');
        Route::get('/view-student/{id}', [AdminController::class, 'viewStudent'])->name('admin.viewStudent');
        Route::get('profile', [AdminController::class, 'showProfile'])->name('admin.showProfile');
    });

    Route::middleware(['auth', 'student'])->group(function () {
        Route::get('/books', [StudentController::class, 'viewAllBooks'])->name('student.books.index');
        Route::get('/books/{book}/borrow', 'StudentController@borrowBook')->name('student.books.borrow');

        Route::post('/books/{book}/borrow', [StudentController::class, 'storeBorrow'])->name('student.books.storeBorrow');
        Route::get('/dashboard', [StudentController::class, 'showDashboard'])->name('student.dashboard');
        Route::get('/profile', [StudentController::class, 'showProfile'])->name('student.profile');
        Route::post('/profile/update', [StudentController::class, 'updateProfile'])->name('student.profile.update');
        Route::get('/my-borrowed-books', [StudentController::class, 'myBorrowedBooks'])->name('student.my_borrowed_books');
    });
});
