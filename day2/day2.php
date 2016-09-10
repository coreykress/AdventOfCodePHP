<?php
/*
 * dimensions are l, w, h
 * surface area = 2*l*w + 2*w*h + 2*h*l
 * calculate surface area + smallest side(l, w, h)
 * sum all calculated
 */

$filename = $argv[1];

$contents = file_get_contents($filename, true);

$contentsArray = explode("\n", $contents);

$total = 0;

foreach ($contentsArray as $dimension) {
	$dimensionArray = explode("x", $dimension);

var_dump($dimensionArray);
	
	if (!empty($dimensionArray)) {
		$length = (int) $dimensionArray[0];
var_dump ($length);
		$width = (int) $dimensionArray[1];
var_dump ($width);		
		$height = (int) $dimensionArray[2];
var_dump ($height);

		$surfaceArea = 2*$length*$width + 2*$width*$height + 2*$height*$length;
var_dump ($surfaceArea);
		$withSide = $surfaceArea + min($length*$width , $width*$height , $height*$length);
var_dump ($withSide);
		$total += $withSide;
var_dump ($total);
	}
	if ($total > 1000) {
		//die;
	}
}

echo "This is the total: " . $total; //1588178
