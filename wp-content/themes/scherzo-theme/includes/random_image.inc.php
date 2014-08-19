<?php
$images = array(
		  array('file' => 'image_'),
		  array('file' => 'image_01'),
		  array('file' => 'image_02'),
		  array('file' => 'image_03'),
		  array('file' => 'image_04'),
		  array('file' => 'image_05'),
		  array('file' => 'image_06'),
		  array('file' => 'image_07'),
		  array('file' => 'image_08'),
		  array('file' => 'image_09'),
		  array('file' => 'image_10'),
		  array('file' => 'image_11'),
		  array('file' => 'image_12'),
		  array('file' => 'image_13'),
		  
);
		  		
$i = rand(0, count($images)-1);
$selectedImage = "../images/Desktop/Gallery/{$images[$i]['file']}.jpg";
$caption = $images[$i]['caption'];
if (file_exists($selectedImage) && is_readable($selectedImage)) {
$imageSize = getimagesize($selectedImage);
}
?>