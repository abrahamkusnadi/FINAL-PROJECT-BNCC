<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function create(Request $req)
    {
        $nama = $req->file('gambar')->getClientOriginalName();
        $req->file('gambar')->storeAs('/images', $nama);

        $validate = $req->validate([
            'title' => 'required',
            'author'=> 'required',
            'publisher'=> 'required',
            'year'=> 'required',
        ], [
            'title.required' => 'the title must be filled with a valid one',
        ]);
        

        if ($validate) {
                Book::create([
                'title' => $req->title,
                'author'=> $req->author,
                'publisher'=> $req->publisher,
                'year'=> $req->year,
                'category_id' => $req->category_id,
                'book_gambar' => $nama,
            ]);
        }

        return back();
    }

    public function store(StoreBookRequest $request)
    {
        //
    }

    public function show()
    {
        $books = Book::all();
        return view('list', compact('books'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('update', compact('book'));
    }

    public function update($id, Request $req)
    {
        Book::findOrFail($id)->update([
            'title' => $req->title,
            'author'=> $req->author,
            'publisher'=> $req->publisher,
            'year'=> $req->year
        ]);

        // $books = Book::all();
        // return view('list', compact('books'));

        return redirect()->route('show');
    }


    public function destroy($id)
    {
        Book::destroy($id);
        return back();
    }
}
