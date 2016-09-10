<?php

$filename = $argv[1];

$contents = file_get_contents($filename, true);

$contentsArray = str_split($contents);

$index = 0;
$total = 0;
$open = 0;
$close = 0;



foreach ($contentsArray as $char) {
$total += 1;
	if ($char === '(') {
		$index = $index + 1;
		$open  = $open +1;
	} else  if ($char === ')') {
		$index -= 1;
		$close = $close + 1;
	}
	if ($index == -1) {
	print 'Location of entering basement '.$total;
	break;	
	}
}


print 'Ending floor '. $index . "\n";

