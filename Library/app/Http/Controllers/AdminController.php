<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $borrowedBooks = Book::where('borrowed', true)->get();
        $allBooks = Book::all();
        $allUsers = User::all();

        return view('admin.dashboard', compact('borrowedBooks', 'allBooks', 'allUsers'));
    }

    public function addBook(Request $request)
    {
        if ($request->isMethod('post')) {
            Book::create([
                'title' => $request->input('title'),
                'borrowed' => false,
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Book added successfully.');
        }

        return view('admin.add-book');
    }

    public function editBook(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        if ($request->isMethod('post')) {
            $book->update([
                'title' => $request->input('title'),
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Book updated successfully.');
        }

        return view('admin.edit-book', compact('book'));
    }

    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Book deleted successfully.');
    }

    public function searchStudent(Request $request)
    {
        $studentId = $request->input('student_id');
        $student = User::where('student_id', $studentId)->first();

        return view('admin.student-details', compact('student'));
    }

    public function viewStudent($id)
    {
        $student = User::findOrFail($id);

        return view('admin.view-student', compact('student'));
    }
    public function showProfile()
{
    $admin = Auth::user(); 
    return view('admin.profile', compact('admin'));
}

public function editProfile()
{
    $admin = Auth::user();
    return view('admin.edit-profile', compact('admin'));
}

public function updateProfile(Request $request)
{
    $admin = Auth::user();

    
    
    return redirect()->route('admin.showProfile')->with('success', 'Profile updated successfully');
}

}
