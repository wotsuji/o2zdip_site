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
	<meta charset='utf-8' />
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

</body>