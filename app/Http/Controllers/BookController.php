<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response($books);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return response($book);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $book = Book::create($input);
        return response($book);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $book = Book::where('_id', $id)->update($input);
        return response($book);
    }

    public function destroy($id)
    {
        $book = Book::where('_id', $id)->delete();
        return response($book);
    }
}
