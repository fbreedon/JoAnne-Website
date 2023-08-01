<?php
$i = 1;
foreach (glob("*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE) as $img_file) {
	$txt_file = fopen($img_file, "w");
	fclose($txt_file);
}
?>