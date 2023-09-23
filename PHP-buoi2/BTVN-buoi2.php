<?php

// Ex 1 : Function PHP reverse
function reverseString($str)
{
    return strrev($str);
}

echo reverseString('Hello World');
echo '</br>';
// Ex 2 : Function PHP count words in a string
function countString($str)
{
    return str_word_count($str) . ' từ';
}

echo countString('Xin chào các bạn');
echo '</br>';

// Ex 3 : Function PHP remove duplicates
function removeDuplicates($arr)
{
    $remove = array_unique($arr);
    return array_values($remove);
}

echo '<pr>';
print_r(removeDuplicates([1, 2, 3, 4, 4, 5]));
echo '</pr>';
echo '</br>';
// Ex 4 : Function PHP ascending array
function ascendingArr($arr)
{
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        if ($arr[$i] < $arr[$i - 1]) {
            return false;
        }
    }
    return true;
}

var_dump(ascendingArr([1, 5, 3, 4, 5]));
echo '</br>';
// Ex 5 : Function PHP reverse so keep the same position
function reverseWordsInString($str)
{
    $cutWord = explode(" ", $str);
    $reverseString = array_map('strrev', $cutWord);
    return implode(" ", $reverseString);
}

echo reverseWordsInString('Hello World');
echo '</br>';
// Ex 6 : Function PHP  find second max in arr
function secondMax($arr)
{
    $largest = $arr[0];
    $secondLargest = null;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } else if ($arr[$i] < $largest && ($secondLargest === null || $arr[$i] > $secondLargest)) {
            $secondLargest = $arr[$i];
        }
    }
    return $secondLargest;
}

echo 'So lon thu 2 : ' . secondMax([1, 3, 5, 6, 7, 8, 9]);
echo '</br>';
// Ex 7 : Function PHP find sum pair of number max
function findPairsWithSum($arr, $sum)
{
    $class = [];
    for ($i = 0; $i < count($arr); $i++) {
        $number = $arr[$i];
        $total = $sum - $number;
        if (in_array($total, $arr) && $total != $number) {
            $class[] = [$number, $total];
        }
    }
    return $class;
}

$input = [2, 4, 3, 5, 6, 1, 7];
$targetSum = 7;
$result = findPairsWithSum($input, $targetSum);
print_r($result);
echo '</br>';

// Ex 8 - Function find number of occurrences
function findMostFrequentElement($arr)
{
    $occurrences = null;
    for ($i = 0; $i < count($arr); $i++) {
        $occurrences++ || $occurrences = 1;
    }
    return $occurrences;
}

$input = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4];
$result = findMostFrequentElement($input);
echo $result;
