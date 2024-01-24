<?php

$change_overs = [
	[2019, "令和"],
	[1989, "平成"],
	[1926, "昭和"],
];

$output_list = [];
$now_y = date('Y');
for ($y = $now_y; $y >= 1960; $y--) {
	for ($k = 0; $k < count($change_overs); $k++) {
		if ($y >= $change_overs[$k][0]) {
			$reki = $y - $change_overs[$k][0] + 1;
			$reki = $change_overs[$k][1] . $reki . "年";

			if (isset($change_overs[$k + 1])) {
				if ($y == $change_overs[$k][0]) {
					$y == $change_overs[$k + 1][0];
					$reki = $reki . "(" . $change_overs[$k + 1][1] . ($y - $change_overs[$k + 1][0] + 1) . "年)";
				}
			}
			$output_list[] = [$y, $reki];
			break;
		}
	}
}

?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="ja">
	<meta name="robots" content="noindex">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
</head>

<body>
	<br>
	<h2>◆西暦と和暦を表示する</h2>
	・表示年からデクリメントしながら1960年まで表示する。<br>
	・年号が変わる時は設定を追加する。<br>
	<br>
	<table style="margin: 0 0 0 20px; border-collapse: separate;border-spacing: 0;">
		<tr>
			<th style="margin: 0; padding: 5px 10px 5px 10px; border: solid 1px #000000;">西暦</th>
			<th style="margin: 0; padding: 5px 10px 5px 10px; border: solid 1px #000000;">和暦</th>
		</tr>
		<?php foreach ($output_list as $values) { ?>
			<tr>
				<td style="margin: 0; padding: 5px 10px 5px 10px; border: solid 1px #000000;"><?php echo $values[0]; ?></td>
				<td style="margin: 0; padding: 5px 10px 5px 10px; border: solid 1px #000000;"><?php echo $values[1]; ?></td>
			</tr>
		<?php } ?>
	</table>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
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