<?php

# 文字列置換によりサニタイズされていると判断
$searchs = array('&', '<', '>', "'", '"', "\\");
$replaces = array('&amp;amp;', '&amp;lt;', '&amp;gt;', '&amp;#39;', '&amp;quot;', '&amp;#xa5;');

# test.
# $input_text = '|&|<|>|\'|"| |\\|'; 
$input_text = '';
$output_text = '';
if (isset($_POST['chg_text'])) {
	$input_text = $_POST['chg_text'];
	$output_text = str_replace(
		$searchs,
		$replaces,
		$input_text
	);
}

?>
<!DOCTYPE html>
<html lang='ja'>

<head>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="ja">
	<meta name="robots" content="noindex">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<title>HTMLエスケープ 変換フォーム</title>
</head>

<body>

	<h1>HTMLエスケープ 変換フォーム</h1>
	<p>
		HTMLを特殊文字にエスケープする。<br>
	</p>

	<p>
	<form name="frm" method="post">
		<textarea name="chg_text" rows="20" cols="60"><?php echo ($output_text); ?></textarea><br>
		<input type="submit"></input>
	</form>
	</p>

	<p>
	<table style="border: solid 1px; padding: 5px;">
		<tr>
			<th colspan="2">◆変換テーブル</th>
		</tr>
		<tr>
			<th>変換前</th>
			<th>変換後</th>
		</tr>
		<tr>
			<td>&amp;</td>
			<td>&amp;amp;</td>
		</tr>
		<tr>
			<td>&lt;</td>
			<td>&amp;lt;</td>
		</tr>
		<tr>
			<td>&gt;</td>
			<td>&amp;gt;</td>
		</tr>
		<tr>
			<td>&#39;</td>
			<td>&amp;#39;</td>
		</tr>
		<tr>
			<td>&quot;</td>
			<td>&amp;quot;</td>
		</tr>
		<tr>
			<td>\</td>
			<td>&amp;#xa5;</td>
		</tr>
	</table>
	</p>
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