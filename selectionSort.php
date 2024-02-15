<?php

$arr = [0, 3, 2, 5, 6, 8, 1, 9, 4, 2, 1, 2, 9, 6, 4, 1, 7, -1, -5, 23, 6, 2, 35, 6, 3, 32];

function selectionSort($arr, $count = 0) 
{

	$length = count($arr);

	for ($i = 0; $i < $length; $i += 1) {
		$minIndex = $i;

		for ($j = $i + 1; $j < $length; $j += 1) {
			if ($arr[$j] < $arr[$minIndex]) {
				$minIndex = $j;
			}
			$count += 1;
		}

		$tmp = $arr[$i];
		$arr[$i] = $arr[$minIndex];
		$arr[$minIndex] = $tmp;
	}


	return $arr;
}

print_r(selectionSort($arr));
