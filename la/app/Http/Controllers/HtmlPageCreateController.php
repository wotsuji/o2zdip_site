<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\HtmlPageDetail;

class HtmlPageCreateController extends Controller
{
    //
    function create_html_files(Request $request){

        // ページ一覧 取得
        $records = HtmlPageDetail::orderBy('order', 'asc')->get();

        // https://localhost/la/public/html_mk/?page_id=1&is_production=0
        foreach($records as $key => $record) {
            $html = Http::get('http://localhost/la/public/html_mk/?page_id='.$record->id);
            $path = '/var/www/html'.$record->page_path;
            file_put_contents($path, $html);
        }
        
        return redirect('/html_edit_index'); 

    }
}
