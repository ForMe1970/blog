<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login()
    {
      return view('admin.session.login');
    }

    public function store()
    {
      
    }
}
