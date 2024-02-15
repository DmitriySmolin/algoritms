<?php

$arr = [1, 4, 5, 8, 5, 1, 2, 7, 5, 2, 1];


function linearSearch($arr, $item, $count = null) {
	$length = count($arr);

	for ($i = 0; $i < $length; $i += 1) {

		$count += 1;

		if ($arr[$i] === $item) {
			return ['key' => $i,
				'count' => $count];
		}
	}

	return null;
}

$data = linearSearch($arr, 8, 0);

print_r('Индекс элемента: '. $data['key']."\n".'Количество итераций поиска: '. $data['count']);
