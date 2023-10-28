<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\HtmlPageDetail;

class HtmlPageCreateController extends Controller
{
    //
    function create_html_files(Request $request)
    {

        // ページ一覧 取得 → 外部ページはHTMLファイルを生成しない
        $records = HtmlPageDetail::where("enabled", 1)->orderBy('order', 'asc')->get();

        // ページ生成
        foreach ($records as $key => $record) {
            // 実行はHTML生成対象のみとする
            if ($record['is_export_html'] != 1) continue;

            $html = Http::get('http://localhost/la/public/html_mk/?page_id=' . $record->id);
            $path = '/var/www/html' . $record->page_path;
            file_put_contents($path, $html);
        }

        return redirect('/html_edit_index');
    }
}
