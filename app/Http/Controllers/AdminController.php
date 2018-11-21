<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aplicant;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {   
        $data = Aplicant::all();
        return view('admin',compact('data'));
    }

    
}
