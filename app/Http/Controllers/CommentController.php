<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return response(Comment::all());
    }

    public function store(Request $request)
    {
        Comment::create([
            'author'=>$request->input('author'),
            'text'=>$request->input('text')
        ]);
        return response(['success'=>true]);
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return response(['success'=>true]);
    }
}
