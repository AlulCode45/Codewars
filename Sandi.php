<?php
function decipherThis($str)
{

    $strings = explode(' ', $str);
    $text = [];

    foreach ($strings as $string) {
        preg_match_all('/\d+/', $string, $firstAlpha);
        $firstAlpha = $firstAlpha[0][0];
        $firstAlpha = chr($firstAlpha);
        array_push($text, $firstAlpha .  preg_replace('/[0-9]+/', '', $string));
    }

    $text = implode(' ', $text);
    $length = strlen($text);

    if ($length > 2) {
        $second = substr($text, 1, 1);
        $last = substr($text, -1, 1);

        $text = substr_replace($text, $last, 1, 1);
        $text = substr_replace($text, $second, -1, 1);
    }
    return $text;
}

echo decipherThis('72olle 103doo 100ya');
