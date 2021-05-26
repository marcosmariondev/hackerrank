<?php

//https://www.hackerrank.com/challenges/compare-the-triplets/problem

function compareTriplets(array $array_one, array $array_two)
{
    $array_one_points = 0;
    $array_two_points = 0;
    
    for($i=0; $i< count($array_one); $i++) {
        if($array_one[$i] > $array_two[$i])
            $array_one_points +=1;
        if($array_one[$i] < $array_two[$i])
            $array_two_points +=1;
    }
    
    return  [$array_one_points, $array_two_points];
}

test('test', function () {
    expect(compareTriplets([5,6,7], [3,6,10]))->toBe([1,1]);
});
