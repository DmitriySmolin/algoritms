<?php

function isPalindrome($x) {
	if ($x < 0) return false;

	if ($x % 10 === 0) return false;

	if ($x < 10) return true;

	$rev = 0;

	while ($x > $rev) {
		$rev *= 10;
		$rev += $x % 10;
		$x = (int) ($x / 10);
	}

	return $x === $rev || $x === (int) ($rev / 10);
}


var_dump(isPalindrome(101));