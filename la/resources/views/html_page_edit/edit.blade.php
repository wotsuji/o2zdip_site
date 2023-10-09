<!doctype html>
<html lang="jp">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="ja">
  <title>編集：o2zdip</title>
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
  <link rel="icon" href="/la/public/favicon.ico">

  <!-- CSS設定 -->
  <link href="/la/public/css/bootstrap-reboot.min.css" rel="stylesheet"><!-- Bootstrap-reboot-->
  <link href="/la/public/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap-min -->
  <link href="/la/public/css/style.css" rel="stylesheet">
  <style>
  </style>

</head>

<body>
  <h1>編集画面</h1>
  <div style="margin: 20px;">
    <form action="/la/public/html_edit_update_exec/" method="post" enctype="multipart/form-data">
      @csrf
      <table class="table table-primary table-striped table-hover" style="width: 990px;">
        <tr>
          <th style="width: 150px;">id</th>
          <td>
            {{$record->id}}
            <input type="hidden" name="page_id" value="{{$record->id}}"></input>
          </td>
        </tr>
        <tr>
          <th>page_title</th>
          <td>
            <input type="text" name="page_title" size="30" value="{{$record->page_title}}"></input>
          </td>
        </tr>
        <tr>
          <th>page_path</th>
          <td>
            <input type="text" name="page_path" size="50" value="{{$record->page_path}}"></input>
          </td>
        </tr>
        <tr>
          <th>order</th>
          <td>
            <input type="text" name="order" size="10" value="{{$record->order}}"></input>
          </td>
        </tr>
        <tr>
          <th>enabled</th>
          <td>
            <input type="text" name="enabled" size="10" value="{{$record->enabled}}"></input>
          </td>
        </tr>
        <tr>
          <th>updated_at</th>
          <td>{{$record->updated_at}}</td>
        </tr>
      </table>
      <div style="text-align: right;width: 990px; margin-bottom: 10px;">
        <input type="submit"></input>
      </div>

      <textarea name="contents" cols="110" rows="30">{{$record->contents}}</textarea>
      <div style="text-align: right;width: 990px; margin-top: 10px; margin-bottom: 10px;">
        <input type="submit"></input>
      </div>
    </form>
  </div>

  <!-- JavaScript  -->
  <script src="/la/public/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap-min -->
  <script src="/la/public/js/base.js"></script>
  <script>
  </script>

</body>

</html>