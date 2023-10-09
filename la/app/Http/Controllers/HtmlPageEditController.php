<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\HtmlPageDetail;

//
class HtmlPageEditController extends Controller
{
    //
    public function index(Request $request)
    {
        $records = HtmlPageDetail::orderBy('order', 'asc')->get();
        return view('html_page_edit/index', compact('records'));
    }

    //
    public function edit(Request $request)
    {
        $page_id = $request->input('page_id');
        $record = [];
        if (isset($page_id) && $page_id >= 1) {
            $record = HtmlPageDetail::find($page_id);
        } else {
            $record = new HtmlPageDetail;
            $record->id = "0";
        }
        return view('html_page_edit/edit', compact('record'));
    }

    //
    public function update_exec(Request $request)
    {
        // 入力チェック
        $validator = Validator::make($request->all(), [
            'page_id' => 'integer', 'page_title' => 'string', 'page_path' => 'string', 'order' => 'integer', 'enabled' => 'integer', 'contents' => 'string'
        ]);
        if ($validator->fails()) {
            dd($validator);
        }
        $page_id = $request->input('page_id');
        if (isset($page_id) && $page_id >= 1) {
            $HtmlPageDetail = HtmlPageDetail::find($request->page_id);
        } else {
            $HtmlPageDetail = new HtmlPageDetail;
            $HtmlPageDetail->public_path_la  = "/la/public";
            $HtmlPageDetail->public_path_mk  = "/mk";
            $HtmlPageDetail->side_menu_mk_link_path  = "/mk/page";
        }
        $HtmlPageDetail->page_title = $request->page_title;
        $HtmlPageDetail->page_path = $request->page_path;
        $HtmlPageDetail->order = $request->order;
        $HtmlPageDetail->enabled = $request->enabled;
        $HtmlPageDetail->contents = $request->contents;
        $HtmlPageDetail->save();
//        return redirect()->route('html_edit_editor', ['page_id' => $HtmlPageDetail->page_id]); 
        return redirect('/html_edit_editor?page_id='.$HtmlPageDetail->id); 
    }
}
