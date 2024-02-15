<?php

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

function binarySearch($arr, $item, $count = null) {


	$start = 0;
	$end = count($arr);
	$middle = null;
	$found = false;
	$position = -1;

	while ($found === false && $start <= $end) {

		$count += 1;

		$middle = floor(($start + $end) / 2);

		if ($arr[$middle] === $item) {
			$found = true;
			$position = $middle;
		} else if ($item < $arr[$middle]) {
			$end = $middle - 1;
		} else {
			$start = $middle + 1;
		}
	}

	return ['position' => $position,
		'count' => $count];
}

$data = binarySearch($arr, 8, 0);

print_r('Индекс элемента: '. $data['position']."\n".'Количество итераций поиска: '. $data['count']);
