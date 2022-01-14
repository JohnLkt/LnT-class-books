<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function createBook(Request $request){
        Book::create([
            'judul' => $request->judul,
            'author' => $request->author,
            'releasedate' => $request->releasedate,
        ]);
        return redirect('/');
}

    public function readBook(Request $request){
        $books = Book::all();
        return view('viewBook', compact('books'));
}
    public function updateBook($id){
        $book = Book::findOrFail($id);
        return view('updateBook', compact('book'));
    }
    public function updatingBook(Request $request, $id){
        Book::findorFail($id)->update([
            'judul' => $request->judul,
            'author' => $request->author,
            'releasedate' => $request->releasedate,
        ]);
        return redirect('/read');
    }
    public function deleteBook($id){
        Book::destroy($id);

        return back();
    }
}