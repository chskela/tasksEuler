<?php

/* 
 * Сумма квадратов разницы
 * Задача 6
 * Сумма квадратов первых десяти натуральных чисел равна
 * 1 2 + 2 2 + ... + 10 2 = 385
 * Квадрат суммы первых десяти натуральных чисел равен
 * (1 + 2 + ... + 10) 2 = 55 2 = 3025
 * Следовательно, разница между суммой квадратов первых десяти натуральных чисел
 * и квадратом суммы составляет 3025 - 385 = 2640.
 * Найти разницу между суммой квадратов первых ста натуральных чисел и квадратом
 * суммы.
 */

//phpinfo();

function sumPow($n) {
    for ($i=1; $i <= $n; $i++) {
        $sum += pow($i, 2);
    }
    return $sum;
}

function powSum($n) {
    for ($i=1; $i <= $n; $i++) {
        $sum += $i;
    }
    return pow($sum, 2);
}

echo (powSum(100) - sumPow(100));