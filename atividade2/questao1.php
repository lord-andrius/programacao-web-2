<?php

	$x = 1;
	$y = 2;
	$z = 3;
	$template = '<span style="color:%s">%d</span><br>';
	printf($template, 'gray', $x);
	printf($template, 'gray', $y);
	printf($template, 'red', $z);

?>
