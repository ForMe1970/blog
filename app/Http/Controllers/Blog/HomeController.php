<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('blog/home/index');
    }

    public function categorys()
    {
      return view('blog/home/index');
    }
}
