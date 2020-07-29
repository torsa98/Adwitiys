<?php

if (isset($_GET['image'])) {
	$image = $_GET['image'];
	$image_size = getimagesize($image);
	echo $image_width = $image_size[0].'<br>';
	echo $image_height = $image_size[1];
}

?>