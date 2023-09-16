<?php
function productArray($nums)
{
    $resultArray = [];
    foreach ($nums as $key => $i) {
        if ($key == 0) {
            $resultArray[$key] = array_product(array_slice($nums, 1));
        } elseif ($key == count($nums) - 1) {
            $resultArray[$key] = array_product(array_slice($nums, 0, -1));
        } else {
            $resultArray[$key] = array_product(array_slice($nums, 0, $key)) * array_product(array_slice($nums, $key + 1));
        }
    }
    return $resultArray;
}
var_dump(productArray([13, 10, 5, 2, 9]));
