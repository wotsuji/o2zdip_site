<!doctype html>
<html lang="jp">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="ja">
  <title>ページ一覧：o2zdip</title>
  <meta name="description" itemprop="description" content="個人的なコードのサンプル・メモ集です。">
  <meta name="author" content="otsuji">
  <!-- ビューポート -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- OG設定 -->
  <meta property="og:site_name" content="o2zdip">
  <meta property="og:description" content="個人的なコードのサンプル・メモ集です。">
  <meta property="og:title" content="o2zdip">
  <meta property="og:url" content="http://o2zdip.starfree.jp/">
  <meta property="og:image" content="">
  <meta property="og:type" content="website"><!-- トップページはwebsite，個別ページはarticle -->
  <!-- Twitter共通設定 -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">

  <!-- ファビコン -->
  <link rel="icon" href="/favicon.ico">

  <!-- CSS設定 -->
  <link href="/la/public/css/bootstrap-reboot.min.css" rel="stylesheet"><!-- Bootstrap-reboot-->
  <link href="/la/public/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap-min -->
  <link href="/la/public/css/style.css" rel="stylesheet">
  <style>
  </style>

</head>

<body>
  <h1>ページ一覧</h1>
  <div style="width: 960px;text-align: right; margin-bottom: 12px;">
    <a href="/la/public/html_edit_create_exec/">HTML生成（実行に時間かかる）</a>
  </div>
  <table class="table table-primary table-striped table-hover" style="width: 1200px;">
    <thead>
      <tr>
        <th>id</th>
        <th>page_title</th>
        <th>category</th>
        <th>order</th>
        <th>enabled</th>
        <th>updated_at</th>
        <th>is_update_hisotry</th>
        <th>is_export_html</th>
        <th>編集</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($records as $record)
      <tr>
        <td>
          {{$record->id}}
        </td>
        <td>
          <a href="/la/public/html_mk/?page_id={{$record->id}}&is_production=0" target="_blank">
            {{$record->page_title}}
          </a>
        </td>
        <td>
        {{$record->category_id}}：
        @foreach ($category_records as $category)
            @if($record->category_id  == $category->id) {{$category->category_name}} @endif
        @endforeach
        </td>
        <td>
          {{$record->order}}
        </td>
        <td>
          {{$record->enabled}}
        </td>
        <td>
          {{$record->updated_at}}
        </td>
        <td>
          {{$record->is_update_hisotry}}
        </td>
        <td>
          {{$record->is_export_html}}
        </td>
        <td>
          <a href="/la/public/html_edit_editor/?page_id={{$record->id}}" target="_blank">
            編集
          </a>
        </td>
      </tr>
      @endforeach
      <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
          <a href="/la/public/html_edit_editor/?page_id=0" target="_blank">
            新規
          </a>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- JavaScript  -->
  <script src="/la/public/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap-min -->
  <script src="/la/public/js/base.js"></script>
  <script>
  </script>

</body>

</html>