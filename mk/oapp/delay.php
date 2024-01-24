<?php

function print_array($data_array)
{
    foreach ($data_array as $key => $data) {
        print htmlspecialchars($key, ENT_QUOTES);
        print "->";
        print htmlspecialchars($data, ENT_QUOTES);
        print "<br>";
    }
}

if (!empty($_GET['second'])) {
    $sleep_time = htmlspecialchars($_GET['second']);
} else {
    $sleep_time = 1;
}
sleep($sleep_time);
?>
<style>
    h4 {
        margin-bottom: 0px;
    }
</style>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="ja">
    <meta name="robots" content="noindex">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
</head>

<body>
    <h1>◆ディレイサービス</h1>

    <form action="" method="get">
        <h4>ディレイ設定</h4>
        <input type="text" name="second" size="4" value="<?php echo $sleep_time ?>" />秒　
        <input type="submit" value="設定" />
    </form>

    <h4>$_SERVER[&#39;REQUEST_TIME&#39;]</h4>
    <?php echo date('Y年m月d日 H時i分s秒', htmlspecialchars($_SERVER['REQUEST_TIME'], ENT_QUOTES)); ?>
    <h4>date()</h4>
    <?php
    $date_time = new DateTime('now', new DateTimeZone('Asia/Tokyo')); ?>
    <?php echo $date_time->format('Y年m月d日 H時i分s秒'); ?>

    <h4>$_SERVER[&#39;REQUEST_METHOD&#39;]</h4>
    <?php echo htmlspecialchars($_SERVER['REQUEST_METHOD'], ENT_QUOTES); ?>
    <h4>POST:</h4>
    <?php print_array($_POST); ?>
    <h4>GET:</h4>
    <?php print_array($_GET); ?>
    <h4>$_SERVER[&#39;HTTP_USER_AGENT&#39;]</h4>
    <?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES); ?>
    <h4>$_SERVER[&#39;SERVER_PROTOCOL&#39;]</h4>
    <?php echo htmlspecialchars($_SERVER['SERVER_PROTOCOL'], ENT_QUOTES); ?>
    <h4>$_SERVER[&#39;HTTPS&#39;]</h4>
    <?php echo htmlspecialchars($_SERVER['HTTPS'], ENT_QUOTES); ?>
    <h4>$_SERVER[&#39;REMOTE_ADDR&#39;]</h4>
    <?php echo htmlspecialchars($_SERVER['REMOTE_ADDR'], ENT_QUOTES); ?>

    <h4>getallheaders()</h4>
    <?php print_array(getallheaders()); ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P3P4KB94');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3P4KB94" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


</body>

</html>