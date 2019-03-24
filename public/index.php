<?php

/* 
 * Проблема 5
 * Наименьший кратный
 * 2520 - это наименьшее число, которое можно разделить на каждое из чисел от 1 до 10 без остатка.
 * Какое наименьшее положительное число равномерно делится на все числа от 1 до 20?
 */

//phpinfo();

// Наибольший общий делитель алгоритм Евклида
function greatestCommonDivisor($m, $n) {
    if ($m > $n ) {
        if ($m % $n == 0) {
            return $n;
        } else {
            $tmp_n = $n;
            $n = $m - floor($m / $n) *$n;
            $m = $tmp_n;
            return greatestCommonDivisor($m, $n);
        }  
    } else {
        if ($n % $m == 0) {
            return $m;
        } else {
            $tmp_m = $m;
            $m = $n - floor($n / $m) *$m;
            $n = $tmp_m;
            return greatestCommonDivisor($n, $m);
    }

}
}
// Наименьшее общее кратное
function leastCommonMultiple($m, $n) {
    return ($m * $n / greatestCommonDivisor($m, $n));
}

// Наименьшее общее кратное для чисел от $n до $m
function lcm($n, $m) {
    $k = leastCommonMultiple($n+1, $n);
    for ($i = $n+2; $i <= $m; $i++) {
    $k = leastCommonMultiple($k, $i);
    }
    return $k;
}

echo lcm(1, 20);