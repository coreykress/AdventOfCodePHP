<?php
/*
 * dimensions are l, w, h
 * surface area = 2*l*w + 2*w*h + 2*h*l
 * calculate surface area + smallest side(l, w, h)
 * sum all calculated
 */

$filename = $argv[1];
$part = $argv[2];
if ($part != 1 && $part != 2) {
    var_dump('MUST BE 1 OR 2');
    exit(0);
}
$contents = file_get_contents($filename, true);

$contentsArray = explode("\n", $contents);

$total = 0;

foreach ($contentsArray as $dimension) {
    $dimensionArray = explode("x", $dimension);

    if (!empty($dimensionArray)) {
        $length = (int)$dimensionArray[0];
        $width = (int)$dimensionArray[1];
        $height = (int)$dimensionArray[2];

        if ($part == 1) {
            $surfaceArea = 2 * $length * $width + 2 * $width * $height + 2 * $height * $length;
            $withSide = $surfaceArea + min($length * $width, $width * $height, $height * $length);
            $total += $withSide;
        }
        if ($part == 2) {
            $lengthP = 2 * $length;
            $widthP = 2 * $width;
            $heightP = 2 * $height;

            $volume = $length * $width * $height;
            $total += $volume + min($lengthP + $widthP, $lengthP + $heightP, $heightP + $widthP);
        }
    }
    if ($total > 1000) {
        //die;
    }
}

echo "This is the total: " . $total; 
