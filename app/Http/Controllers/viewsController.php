<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function codeEntry(){
        return view('code-entry');
    }
}
