<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function listAdmin()
    {
        return Admin::paginate(4);
    }
}
