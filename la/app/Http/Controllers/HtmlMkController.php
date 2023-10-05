<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlMkController extends Controller
{
    //
    public function index()
    {
        $hello = "Hello Word.";
        
        return view('html_mk_index',compact('hello'));

    }
}
