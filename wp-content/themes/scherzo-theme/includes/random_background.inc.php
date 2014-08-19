<?php
$images = array(
		  array('file' => 'beach'),
		  array('file' => 'desert'),
		  array('file' => 'snow'),
		  array('file' => 'kitchen'),
		  array('file' => 'forest'),
		  array('file' => 'trees'),
		  array('file' => 'africa'),
		  
		  		);
		  		
$i = rand(0, count($images)-1);
$backgroundImage = "url(../images/Desktop/background/{$images[$i]['file']}.png)";
$caption = $images[$i]['caption'];
if (file_exists($backgroundImage) && is_readable($selectedImage)) {
$imageSize = getimagesize($selectedImage);
}
?>