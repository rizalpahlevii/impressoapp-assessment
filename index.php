<?php

$a = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];

for ($i = 1; $i < 30; $i++) {
    echo $i . " = " . f($a, $i) . "<br>";
}

echo 13 . " = " . f($a, 13);

function f($a, $x)
{
    $tempArray = $a;
    if (!$x < $a[0]) {
        if (!array_search($x, $a, true)) {
            array_push($tempArray, $x);
        }
    }
    $searchValue = array_search($x, $tempArray, true);
    if ($searchValue !== null) {
        if ($searchValue < 1) {
            return -1;
        } else {
            sort($tempArray);
            $resultIndex = array_search($x, $tempArray, true);
            $index = $resultIndex - 1;
            if ($index < 0) {
                return -1;
            } else {
                return $tempArray[$resultIndex - 1];
            }
        }
    }
}
