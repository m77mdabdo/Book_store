<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowedBook;

class StudentController extends Controller
{
    public function viewAllBooks()
    {
        $books = Book::all();
        return view('student.books.index', compact('books'));
    }

    public function borrowBook(Book $book)
    {
        return view('student.books.borrow', compact('book'));
    }

    public function storeBorrow(Request $request, Book $book)
    {
        
    }
    public function showDashboard()
{
    $studentId = auth()->user()->id;
    $borrowedBooks = BorrowedBook::where('student_id', $studentId)->with('book')->get();
    
    return view('student.dashboard', compact('borrowedBooks'));
}
public function showProfile()
{
    $student = auth()->user();
    return view('student.profile', compact('student'));
}


public function updateProfile(Request $request)
{
    $student = auth()->user();
    $student->full_name = $request->input('full_name');
    $student->email = $request->input('email');
    $student->mobile_number = $request->input('mobile_number');
    

    $student->save();

    return redirect()->route('student.profile')->with('success', 'Profile updated successfully.');
}
public function myBorrowedBooks()
{
    $student = auth()->user();
    $borrowedBooks = $student->borrowedBooks; 

    return view('student.my_borrowed_books', compact('borrowedBooks'));
}


}
