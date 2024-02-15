<?php

$arr = [1, 4, 5, 8, 5, 1, 2, 7, 5, 2, 1];

function linearSearch($arr, $item) {
	$length = count($arr);

	for ($i = 0; $i < $length; $i += 1) {
		if ($arr[$i] === $item) {
			return $i;
		}
	}

	return null;
}

print_r(linearSearch($arr, 8));
print_r(linearSearch($arr, 111));
