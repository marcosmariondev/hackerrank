<?php
https://www.hackerrank.com/challenges/diagonal-difference/problem?h_r=next-challenge&h_v=zen
function diagonalDifference($array)
{
    $length_matrix = count($array);
    $left_to_right = 0;
    $right_to_left = 0;
    
    for($i=0; $i<$length_matrix; $i++){
        $arr = $array[$i];
    
        $left_to_right += $arr[$i];
        $right_to_left += $arr[($length_matrix - 1) - $i];
      
    }

    return abs($left_to_right - $right_to_left);
}

test('diagonalDifference', function () {
    
    $arr = [
        [11, 2, 4],
        [4, 5, 6],
        [10, 8, -12],
    ];
    
    $arr2 = [
        [1, 1, 1, 1],
        [1, 2, 1, 1],
        [1, 1, 3, 1],
        [1, 1, 1, 4],
    ];
   
    expect(diagonalDifference($arr))->toBe(15);
    expect(diagonalDifference($arr2))->toBe(6);
});
