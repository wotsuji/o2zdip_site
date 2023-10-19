<?php

// FizzBuzz
// 実行方法： php -f fizzbuzz.php

// FizzBuzzターゲット配列
$TARGET_ARRAY = [
    [3, "Fizz"],
    [5, "Buzz"]
];
// HIT無しの時の出力テキスト
$SKIP_TEXT = "-";
// 1～Limit
$LIMIT = 100;

$fizzbuzz = new FizzBuzz();
$output_text = $fizzbuzz->fizzBuzzExec($TARGET_ARRAY, $SKIP_TEXT, $LIMIT);
echo $output_text;

class FizzBuzz
{

    public function fizzBuzzExec($target_array, $skip_text, $limit)
    {
        $output_text = "";
        for ($i = 1; $i <= $limit; $i++) {
            $output_line = $this->fizzBuzzOutputLine($target_array, $skip_text, $i);
            $output_text .= $i . ":" . $output_line . "\n";
        }
        return $output_text;
    }

    private function fizzBuzzOutputLine($target_array, $skip_text, $check_int)
    {
        $output_line = "";
        foreach ($target_array as $vals) {
            if ($check_int % $vals[0] == 0) {
                $output_line .= $vals[1];
            }
        }
        if ($output_line == "") {
            $output_line = $skip_text;
        }
        return $output_line;
    }
}
