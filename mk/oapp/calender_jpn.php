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

</body>