<?php

$dir = DIRECTORY_SEPARATOR;
$fonteBevan = "fonts" . $dir . "Bevan" . $dir . "Bevan-Regular.ttf";
$fontePlayboll = "fonts" . $dir . "Playball" . $dir . "Playball-Regular.ttf";

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 32, 0, 450, 150, $titleColor, $fonteBevan ,"CERTIFICADO");
imagestring($image, 32, 440, 350, $titleColor, $fontePlayboll, "Alex Tezza");
imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>