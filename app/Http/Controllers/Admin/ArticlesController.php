<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
      return view('admin.articles.index');
    }

    public function create()
    {
      return view('admin.articles.create');
    }
}
