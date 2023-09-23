<?php

// Ex1 - Function sum in arr
function sumArr($arr)
{
    $sum = null;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

$arr = [1, 2, 3, 4, 5];
$result = sumArr($arr);
echo 'Tong cac phan tu trong mang la : ' . $result;
echo '</br>';

// Ex2 - Function prime number
function isPrimeNumber($num)
{
    if ($num <= 1) {
        return false;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

$number = 17;
if (isPrimeNumber($number)) {
    echo $number . ' la so nguyen to';
} else {
    echo $number . ' khong la so nguyen to';
}
echo '</br>';

// Ex3 - Function value max in arr
function findMaxValue($arr)
{
    $max = null;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$array = [10, 5, 8, 20, 3];
$result = findMaxValue($array);
echo $result . ' la so lon nhat';
echo '</br>';

// Ex4 - Function  PHP print occurrences
function countOccurrences($arr, $value)
{
    $val = null;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $value) {
            $val++ || $val = 1;
        }
    }
    return $val;
}

$array = [1, 2, 3, 4, 2, 5, 2];
$valueToFind = 3;
$result = countOccurrences($array, $valueToFind);
echo "Số lần xuất hiện của " . $valueToFind . " trong mảng là: " . $result;
echo '</br>';

// Ex5 - Functicon reverse
function reverseArray($arr)
{
    return array_reverse($arr);
}

$array = [1, 2, 3, 4, 5];
$result = reverseArray($array);
echo "Mảng sau khi đảo ngược là: ";
print_r($result);
echo '</br>';

// Ex 6 - Function sum number devisible 3 or 5 in arr
function sumDivisibleBy3or5($arr)
{
    $sum = null;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 3 == 0 || $arr[$i] % 5 == 0) {
            $sum += $arr[$i];
        }
    }
    return $sum;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = sumDivisibleBy3Or5($array);
echo "Tổng các số chia hết cho 3 hoặc 5 trong mảng là: " . $result;
echo '</br>';

// Ex 7 - Function factorial a number
function factorial($num)
{
    $total = 1;
    for ($i = 1; $i <= $num; $i++) {
        $total *= $i;
    }
    return $total;
}

$number = 5;
$result = factorial($number);
echo "Giai thừa của " . $number . " là: " . $result;
echo '</br>';

// Ex 8 - Function PHP max k
function findKthLargest($arr, $k)
{
    rsort($arr);
    return $arr[$k - 1];
}

$array = [10, 5, 8, 20, 3];
$k = 2;
$result = findKthLargest($array, $k);
echo "Phần tử lớn thứ " . $k . " trong mảng là: " . $result;
