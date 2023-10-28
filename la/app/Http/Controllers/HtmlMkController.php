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
        // if (isset($is_production) && $is_production == 1) {
        $public_path = $record['public_path_mk'];
        // } else {
        //     $public_path = $record['public_path_la'];
        // }
        $page_title = $record['page_title'];
        $page_path  = $record['page_path'];
        $side_menu_mk_link_path = $record['side_menu_mk_link_path'];

        $contents = $record['contents'];

        // 更新履歴 置換
        // TODO：べた書きしてるのでクラスなりライブラリ化が必要。CURLされると全ページで実行されるのもなんとかできないか。
        // TODO：トップページ/サブぺージを更新履歴の表示対象からはずしたい。そうすると外部サイトで更新した時の履歴が飛ぶのでなんとかできないか。。。
        $update_records = HtmlPageDetail::where([
            ["enabled", "=", 1],
            ["is_update_hisotry", "=", 1],
        ])->orderBy('updated_at', 'desc')->limit(10)->get();
        $update_log_html = '';
        foreach ($update_records as $update_record) {
            $update_log_html .= $update_record['updated_at']->format('Y年m月d日') . "　<a href='" . $update_record['page_path'] . "' target='_blank'>" . $update_record['page_title'] . "</a><br>\n";
        }
        $contents = preg_replace('[%update_log_last_ten%]', $update_log_html, $contents);

        return view('html_mk_index', compact('contents', 'public_path', 'page_title', 'page_path', 'side_menu_mk_link_path'));
    }
}
