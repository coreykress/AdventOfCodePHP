<?php
/*
 */

$filename = $argv[1];

$contents = file_get_contents($filename, true);

$contentsArray = explode("\n", $contents);

$total = 0;
$locations = [];
$locations[] = [0, 0];
$length = strlen($contents);

$x = 0;
$y = 0;

$a = 0;
$b = 0;

for ($i = 0; $i<$length; $i++) {
	$char = $contents[$i];
	if ($i%2 == 1) {
		switch($char) {
			case '^':
				$y += 1;
				break;
			case 'v':
				$y -= 1;
				break;
			case '>':
				$x += 1;
				break;
			case '<':
				$x -= 1;s
				break;
		}
		$locations[] = [$x, $y];
		
	}else if ($i%2 == 0) {
		switch($char) {
			case '^':
				$a += 1;
				break;
			case 'v':
				$a -= 1;
				break;
			case '>':
				$b += 1;
				break;
			case '<':
				$b -= 1;
				break;
		}
		$locations[] = [$b, $a];
	
	}
}

var_dump($locations);
$unique = array_unique($locations, SORT_REGULAR);
$total = count($unique);

echo "This is the total: " . $total."\r\n";
?>
