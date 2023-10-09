<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HtmlPageDetail;

class HtmlMkController extends Controller
{
    //
    public function index(Request $request)
    {

        $page_id = $request->input('page_id');
        $is_production = $request->input('is_production');

        $record = HtmlPageDetail::find($page_id);
//        if (isset($is_production) && $is_production == 1) {
            $public_path = $record['public_path_mk'];
//        } else {
//            $public_path = $record['public_path_la'];
//        }
        $contents = $record['contents'];
        $page_title = $record['page_title'];
        $page_path  = $record['page_path'];
        $side_menu_mk_link_path = $record['side_menu_mk_link_path'];

        return view('html_mk_index', compact('contents', 'public_path', 'page_title', 'page_path', 'side_menu_mk_link_path'));
    }
}
