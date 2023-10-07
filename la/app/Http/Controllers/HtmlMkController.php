<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HtmlPageDetail;

class HtmlMkController extends Controller
{
    //
    public function index(Request $request)
    {
        $hello = "Hello Word.";

        $page_id = $request->input('page_id');
        $record = HtmlPageDetail::find($page_id);

        dump($record); 

        
        return view('html_mk_index',compact('hello'));

    }
}
