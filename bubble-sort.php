<?php
function bubbleSort($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

//Usage example
$arr = [4,2,9,0,6];
$sorted = bubbleSort($arr);
echo 'sorted: ';
print_r($arr);
echo '<br> unsorted: ';
print_r($sorted);