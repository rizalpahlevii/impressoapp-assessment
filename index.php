<?php

$a = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];

for ($i = 1; $i < 30; $i++) {
    echo $i . " = " . f($a, $i) . "<br>";
}

echo 13 . " = " . f($a, 13);

function f($a, $n)
{
    $tempArray = $a;
    if (!$n < $a[0]) {
        if (!array_search($n, $a, true)) {
            array_push($tempArray, $n);
        }
    }
    $searchValue = array_search($n, $tempArray, true);
    if ($searchValue !== null) {
        if ($searchValue < 1) {
            return -1;
        } else {
            sort($tempArray);
            $resultIndex = array_search($n, $tempArray, true);
            $index = $resultIndex - 1;
            if ($index < 0) {
                return -1;
            } else {
                return $tempArray[$resultIndex - 1];
            }
        }
    }
}
