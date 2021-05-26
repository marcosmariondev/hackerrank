<?php

//https://www.hackerrank.com/challenges/a-very-big-sum/problem

function aVeryBigSum($ar) {
    return array_sum($ar);
}

test('aVeryBigSum', function () {
    expect(aVeryBigSum([5,5,5]))->toBe(15);
});
