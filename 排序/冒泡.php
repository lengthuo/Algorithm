<?php
/**
 * Date: 2017/10/23
 * User: lishuo
 */
//代码优化

function bubbleSort($numbers)
{
    $cnt = count($numbers);
    for ($i = 0; $i < $cnt; $i++) {
        for ($j = 0; $j < $cnt - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }
    return $numbers;
}

$num = [20, 40, 60, 80, 30, 70, 90, 10, 50, 0];
var_dump(bubbleSort($num));



//============================================================================
// 冒泡排序
// 分类 -------------- 内部比较排序
// 数据结构 ---------- 数组
// 最差时间复杂度 ---- O(n^2)
// 最优时间复杂度 ---- 如果能在内部循环第一次运行时,使用一个旗标来表示有无需要交换的可能,可以把最优时间复杂度降低到O(n)
// 平均时间复杂度 ---- O(n^2)
// 所需辅助空间 ------ O(1)
// 稳定性 ------------ 稳定

//$s = [1, 5, 3, 8, 2, 9];
//$n = count($s);
//for ($j = 0; $j < $n - 1; ++$j) {
//    for ($i = 0; $i < $n - 1 - $j; ++$i) {
//        if ($s[$i] > $s[$i + 1]) {
//            swap($s, $i, $i + 1);
//        }
//    }
//}
//print_r($s);

// 定向冒泡排序
// 分类 -------------- 内部比较排序
// 数据结构 ---------- 数组
// 最差时间复杂度 ---- O(n^2)
// 最优时间复杂度 ---- 如果序列在一开始已经大部分排序过的话,会接近O(n)
// 平均时间复杂度 ---- O(n^2)
// 所需辅助空间 ------ O(1)
// 稳定性 ------------ 稳定
//$s = [2, 9, 3, 7, 1, 8, 3];
//$n = count($s);
//$left = 0;
//$right = $n - 1;
//while ($left < $right) {
//    for ($i = $left; $i < $right; ++$i) {
//        if ($s[$i] > $s[$i + 1]) {
//            swap($s, $i, $i + 1);
//        }
//    }
//    $right -= 1;
//    for ($i = $right; $i > $left; --$i) {
//        if ($s[$i - 1] > $s[$i]) {
//            swap($s, $i - 1, $i);
//        }
//    }
//    $left += 1;
//}
//
//print_r($s);
//
//function swap(&$s, $i, $j)
//{
//    $temp = $s[$i];  //辅助空间o(1)
//    $s[$i] = $s[$j];
//    $s[$j] = $temp;
//}

