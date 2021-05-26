<?php

//https://www.hackerrank.com/challenges/counting-valleys/problem?h_r=profile

function countingValleys($steps, $path)
{
    $path_splited = str_split($path);
    $ocean_level = 0;
    $qty_valley = 0;
    
    for ($number_step = 0; $number_step < $steps; $number_step++) {
        
        $is_rising = $path_splited[$number_step] === 'U';
        $nivel_ocean = $is_rising ? ++$ocean_level : --$ocean_level;
        
        if ($nivel_ocean === 0 && $is_rising) $qty_valley++;
        
    }
    
    return $qty_valley;
    
}

test('qty valley', function () {
    expect(countingValleys(8, 'UDDDUDUU'))->toBe(1);
    expect(countingValleys(12, 'DDUUDDUDUUUD'))->toBe(2);
});
