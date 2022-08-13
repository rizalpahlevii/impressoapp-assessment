<?php


/**
 * A Random Data
 */
$a = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];

for ($i = 1; $i < 30; $i++) {
    echo $i . " = " . f($a, $i) . "<br>";
}

echo 13 . " = " . f($a, 13);

/**
 * Function to return next smallest number on left side
 * 
 * @param array $a
 * @param int $x
 * 
 * @return int
 */
function f($a, $x)
{
    /**
     * Temporary array to copy value from $a into $tempArray
     */
    $tempArray = $a;

    /**
     * if statement to checking if $x number less than value of first index on $a array
     * if true, proceed to the second check
     * in the second check, which is to check whether the value sent is already in the $tempArray array? 
     * if it doesn't exist then add the value to $tempArray
     */
    if (!$x < $a[0]) {
        if (!array_search($x, $a, true)) {
            array_push($tempArray, $x);
        }
    }

    /**
     * In the code below, it is used to return the next small value on the left side
     */
    $searchValue = array_search($x, $tempArray, true);
    if ($searchValue !== null) {
        /**
         * This check is used to check if $searchValue is less than 1
         * If true then return value -1
         * if it is wrong it will go to else statement
         */
        if ($searchValue < 1) {
            return -1;
        } else {
            /**
             * Sort the array from smallest to largest
             */
            sort($tempArray);

            /**
             * Finding the value sent in $tempArray
             * In array_search() function will return index off value searched
             * if it doesn't exist then it returns false
             */
            $resultIndex = array_search($x, $tempArray, true);

            /**
             * Find the original array index by $resultIndex(Result of searching $x on $tempArray) -1 
             */
            $index = $resultIndex - 1;

            /**
             * Here we check again, is the index smaller than 0?
             * If true return value -1
             * if wrong return array with index
             */
            if ($index < 0) {
                return -1;
            } else {
                return $tempArray[$index];
            }
        }
    }
}
