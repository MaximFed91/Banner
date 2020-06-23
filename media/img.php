<?php
$img_p = imagecreatetruecolor(200, 100);
$img = imagecreatefrompng('banner.png');
imagecopyresampled($img_p, $img, 0, 0, 0, 0, 100, 100, 2000, 2000);
imagecopyresampled($img_p, $img, 100, 0, 0, 0, 100, 100, 2000, 2000);
imagepng($img_p);