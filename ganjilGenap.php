<?php
function find($integers)
{
    $genap = [];
    $ganjil = [];
    foreach ($integers as $i) {
        if ($i % 2 == 0 or $i % 2 == -0) {
            array_push($genap, $i);
        } elseif ($i % 2 == 1 or $i % 2 == -1) {
            array_push($ganjil, $i);
        } else {
            continue;
        }
    }
    if (count($genap) > count($ganjil)) {
        return $ganjil[0];
    } elseif (count($genap) < count($ganjil)) {
        return $genap[0];
    }
}

echo find([100, 101, 102]);
